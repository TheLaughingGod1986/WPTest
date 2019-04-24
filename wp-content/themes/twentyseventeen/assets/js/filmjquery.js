jQuery(document).ready
(
    function sortable() {
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
        // jQuery("#new_fields").disableSelection();


        lists = document.getElementsByClassName('ui-state-default');
        x = [];
        for (var i = 0, im = lists.length; im > i; i++) {
            x[i] = lists[i].id;
            console.log(x);
        }

        var uls = document.querySelectorAll('ul');
        for (var j = 0; j < uls.length; j++) {
            var ul = uls.item(j);
            for (var i = ul.children.length; i >= 0; i--) {
                ul.appendChild(ul.children[Math.random() * i | 0]);
            }
        }
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
    },
);

$(
    function moveupanddown(){
    $('.glyphicon-arrow-up').on('click', function(e){
        e.preventDefault();
        var _this = $(this);
        var _parent = _this.closest('ul');
        var _child = $(_parent).find('li');
        var selected= $(this).closest('li').index();
        jQuery($(_parent).children().eq(selected-1)).before(jQuery($(_parent).children().eq(selected)));
    });

    $('.glyphicon-arrow-down').on('click', function(e){
        e.preventDefault();
        var _this = $(this);
        var _parent = _this.closest('ul');
        var _child = $(_parent).find('li');
        var selected= $(this).closest('li').index();
        jQuery($(_parent).children().eq(selected+1)).after(jQuery($(_parent).children().eq(selected)));
        selected=selected+1;
    });

}
);