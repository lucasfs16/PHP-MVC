<?php
    require_once APPPATH."models/serianameable.php";
    interface Serializable extends Serianameable{
        function toArray();
    }
?>