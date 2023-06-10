<?php
    class WebUi{
        static function Button($type, $child='', $classnames='', $id, $disabled = false){
            return "<button type='{$type}' id='$id' class='$classnames' $disabled>$child</button>";
        }

        static function input($type, $placeholder = '', $name = '', $id = ''){
            return "<input type='$type' placeholder='$placeholder' name='$name' id='$name'>";
        }
    }

    class Input{
        // ` . 
        static function text($id, $label = null, $class = "", $disabled = false){
            return "<div class='webui-input-container'>" .
                        ($label != null ? "<label for={$id}>$label</label>" : null)       
                        ." <div class='webui-input'>
                            <button type='button' disabled>
                                <i></i>
                            </button>
                            <input type='text' id='$id' class='$class'" . ($disabled ? "disabled" : null) . "/>
                        <div>
                    </div>";
        }

        static function dropdown($id, $label = null){

        }

    }

    class Icon{
        function __construct(){

        }
    }

    class JS{
        static function setTimeout($callback, int $timeout){
            // sleep($timeout/1000);
            $callback();
        }
    }
?>