jQuery(document).ready

// Please see console log for dynamic list of re orderd films
(
    function () {
        jQuery("#new_fields").sortable({
            cursor: 'move',
            // post
            update: function () {
                var order = jQuery('#new_fields').sortable('serialize');
                jQuery.ajax({
                    type: "POST",
                    url: "<?php filmlist( 'url' ); ?>/wp-admin/admin-ajax.php",
                    data: "action=update_field_order&" + order
                });
            }
        });
        jQuery("#new_fields").disableSelection();

        var ul = document.querySelector('ul');
        for (var i = ul.children.length; i >= 0; i--) {
            ul.appendChild(ul.children[Math.random() * i]);
        }

        lists = document.getElementsByClassName('ui-state-default');
        x = [];
        for (var i = 0, im = lists.length; im > i; i++) {
            x[i] = lists[i].id;
            console.log(x);
        }
    },

    function () {
        $(".moveup").on("click", function () {
            var elem = $(this).closest("li");
            elem.prev().before(elem);
        });

        $(".movedown").on("click", function () {
            var elem = $(this).closest("li");
            elem.next().after(elem);
        });

        $(".movetop").on("click", function () {
            var elem = $(this).closest("li");
            elem.siblings().first().before(elem);
        });

        $(".movebottom").on("click", function () {
            var elem = $(this).closest("li");
            elem.siblings().last().after(elem);
        });
    },

    function sendFilms() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var url = "postmycode.php";
        var params = "array=" + name + email + x.toString();
        http.open("POST", url, true);

        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.setRequestHeader("Content-length", params.length);
        http.setRequestHeader("Connection", "close");

        http.onreadystatechange = function () {//Call a function when the state changes.
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText);
            }
        };
        http.send(params);
    }
);


// $( function() {
//     $( "#sortable" ).sortable();
//     $( "#sortable" ).disableSelection();
// } );