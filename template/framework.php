<?php

function categories() {
    $categories = array(
        array("id" => 1, "img" => "img/category1.jpg"),
        array("id" => 2, "img" => "img/category2.jpg"),
        array("id" => 3, "img" => "img/category3.jpeg"),
        array("id" => 4, "img" => "img/category4.jpg"),
        array("id" => 5, "img" => "img/category5.jpg"),
    );
    echo "<ul id=\"cataglogue_list\">
            <li id=\"catalogue_recherche\">recherche catalogue</li>
                <li id=\"catalogue_title\"><h2>Catégories</h2></li>";
    foreach ($categories as $categorie) {
        echo "<li><a href=\"\"><img id=" . $categorie["id"] . " src=\"" . $categorie["img"] . "\"></a></li>";
    }
    echo "</ul>";
}


function title_non_connecte(){
    echo "<div id=\"connection_form\">
                <form>
                    <table border=\"0\">
                        <tbody>
                            <tr>
                                <td><input type=\"username\" name=\"username\" value=\"\" /></td>
                                <td><input type=\"password\" name=\"password\" value=\"\" /></td>
                                <td><input type=\"submit\" value=\"connection\" name=\"submit\" /></td>
                            </tr>
                            <tr>
                                <td><a id=\"inscription_link\">Inscription</a></td>
                                <td><a href=\"\">Mot de passe oublier?</a></td>
                                <td><input type=\"checkbox\" name=\"remember\" value=\"yes\" />Retenir mon mot de passe</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>";
}

function searchBar_non_connecte(){
    
}

function share_box(){
    echo "<div id=\"share_container\">
                        <table>
                            <tbody>
                                <tr>
                                    <td><a name=\"fb_share\" type=\"button\" share_url=\"YOUR_URL\"></a>
                                        <script src=\"http://static.ak.fbcdn.net/connect.php/js/FB.Share\"
                                                type=\"text/javascript\">
                                        </script>
                                    </td>
                                    <td>
                                        <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"></script>
                                        <script type=\"IN/Share\"></script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-lang=\"en\" data-count=\"none\">Tweet</a>
                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                    </td>
                                    <td>
                                        <script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\"></script>
                            <g:plusone annotation=\"none\" size=\"tall\" width=\"100px\"></g:plusone>
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>";
}
?>
