<?php
    /**
     * class for javascript style dom
     */
    class style{
        public function __construct($valueOfAttribute, $type, $index)
        {
            $this->valueOfAttribute = $valueOfAttribute;
            $this->type = $type;
            $this->index = $index;
        }

        public function color($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.color = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.color = "' . $val . '";';
            }
            else{
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.color = ' . $val[0] . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.color = ' . $val[0] . ';';
            }
        }

        public function alignContent($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.alignContent = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.alignContent = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.alignContent = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.alignContent = ' . $val . 't;';
            }
        }

        public function animation($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.animation = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.animation = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.animation = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.animation = ' . $val . 't;';
            }
        }

        public function border($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.border = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.border = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.border = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.border = ' . $val . 't;';
            }
        }

        public function bottom($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.bottom = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.bottom = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.bottom = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.bottom = ' . $val . 't;';
            }
        }

        public function cursor($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.cursor = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.cursor = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.cursor = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.cursor = ' . $val . 't;';
            }
        }

        public function direction($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.direction = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.direction = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.direction = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.direction = ' . $val . 't;';
            }
        }

        public function display($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.display = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.display = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.display = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.display = ' . $val . 't;';
            }
        }

        public function filter($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.filter = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.filter = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.filter = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.filter = ' . $val . 't;';
            }
        }

        public function flex($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.flex = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.flex = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.flex = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.flex = ' . $val . 't;';
            }
        }

        public function flexDirection($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.flexDirection = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.flexDirection = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.flexDirection = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.flexDirection = ' . $val . 't;';
            }
        }

        public function flexFlow($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.flexFlow = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.flexFlow = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.flexFlow = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.flexFlow = ' . $val . 't;';
            }
        }

        public function font($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.font = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.font = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.font = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.font = ' . $val . 't;';
            }
        }

        public function fontFamily($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontFamily = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontFamily = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontFamily = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontFamily = ' . $val . 't;';
            }
        }

        public function fontSize($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontSize = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontSize = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontSize = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontSize = ' . $val . 't;';
            }
        }

        public function fontStyle($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontStyle = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontStyle = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontStyle = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontStyle = ' . $val . 't;';
            }
        }

        public function fontWeight($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontWeight = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontWeight = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.fontWeight = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.fontWeight = ' . $val . 't;';
            }
        }

        public function height($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.height = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.height = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.height = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.height = ' . $val . 't;';
            }
        }

        public function justifyContent($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.justifyContent = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.justifyContent = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.justifyContent = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.justifyContent = ' . $val . 't;';
            }
        }

        public function left($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.left = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.left = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.left = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.left = ' . $val . 't;';
            }
        }

        public function listStyle($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.listStyle = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.listStyle = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.listStyle = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.listStyle = ' . $val . 't;';
            }
        }

        public function margin($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.margin = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.margin = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.margin = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.margin = ' . $val . 't;';
            }
        }

        public function marginTop($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginTop = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginTop = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginTop = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginTop = ' . $val . 't;';
            }
        }

        public function marginRight($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginRight = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginRight = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginRight = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginRight = ' . $val . 't;';
            }
        }

        public function marginBottom($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginBottom = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginBottom = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginBottom = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginBottom = ' . $val . 't;';
            }
        }

        public function marginLeft($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginLeft = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginLeft = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.marginLeft = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.marginLeft = ' . $val . 't;';
            }
        }

        public function opacity($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.opacity = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.opacity = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.opacity = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.opacity = ' . $val . 't;';
            }
        }

        public function outline($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.outline = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.outline = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.outline = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.outline = ' . $val . 't;';
            }
        }

        public function overflow($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.overflow = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.overflow = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.overflow = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.overflow = ' . $val . 't;';
            }
        }

        public function overflowX($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.overflowX = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.overflowX = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.overflowX = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.overflowX = ' . $val . 't;';
            }
        }

        public function overflowY($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.overflowY = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.overflowY = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.overflowY = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.overflowY = ' . $val . 't;';
            }
        }

        public function padding($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.padding = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.padding = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.padding = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.padding = ' . $val . 't;';
            }
        }

        public function paddingTop($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingTop = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingTop = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingTop = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingTop = ' . $val . 't;';
            }
        }

        public function paddingRight($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingRight = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingRight = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingRight = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingRight = ' . $val . 't;';
            }
        }

        public function paddingBottom($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingBottom = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingBottom = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingBottom = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingBottom = ' . $val . 't;';
            }
        }

        public function paddingLeft($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingLeft = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingLeft = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.paddingLeft = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.paddingLeft = ' . $val . 't;';
            }
        }

        public function position($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.position = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.position = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.position = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.position = ' . $val . 't;';
            }
        }

        public function right($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.right = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.right = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.right = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.right = ' . $val . 't;';
            }
        }

        public function textAlign($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textAlign = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textAlign = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textAlign = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textAlign = ' . $val . 't;';
            }
        }

        public function textDecoration($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textDecoration = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textDecoration = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textDecoration = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textDecoration = ' . $val . 't;';
            }
        }

        public function textDecorationColor($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textDecorationColor = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textDecorationColor = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textDecorationColor = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textDecorationColor = ' . $val . 't;';
            }
        }

        public function textIndent($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textIndent = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textIndent = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textIndent = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textIndent = ' . $val . 't;';
            }
        }

        public function textOverflow($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textOverflow = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textOverflow = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.textOverflow = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.textOverflow = ' . $val . 't;';
            }
        }

        public function top($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.top = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.top = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.top = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.top = ' . $val . 't;';
            }
        }

        public function transition($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.transition = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.transition = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.transition = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.transition = ' . $val . 't;';
            }
        }

        public function transitionProperty($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.transitionProperty = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.transitionProperty = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.transitionProperty = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.transitionProperty = ' . $val . 't;';
            }
        }

        public function transitionDuration($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.transitionDuration = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.transitionDuration = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.transitionDuration = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.transitionDuration = ' . $val . 't;';
            }
        }

        public function verticalAlign($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.verticalAlign = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.verticalAlign = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.verticalAlign = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.verticalAlign = ' . $val . 't;';
            }
        }

        public function visibility($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.visibility = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.visibility = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.visibility = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.visibility = ' . $val . 't;';
            }
        }

        public function width($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.width = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.width = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.width = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.width = ' . $val . 't;';
            }
        }

        public function wordSpacing($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.wordSpacing = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.wordSpacing = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.wordSpacing = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.wordSpacing = ' . $val . 't;';
            }
        }

        public function zIndex($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.zIndex = "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.zIndex = "' . $val . '";';
            }
            else
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").style.zIndex = ' . $val . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].style.zIndex = ' . $val . 't;';
            }
        }
    }

    /**
     * class for events on objects
     */
    class event
    {
        public function __construct($valueOfAttribute, $type, $index)
        {
            $this->valueOfAttribute = $valueOfAttribute;
            $this->type = $type;
            $this->index = $index;
        }

        public function click($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("click", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("click", function(){';
                    $function();
                echo '});';
            }
        }

        public function change($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("change", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("change", function(){';
                    $function();
                echo '});';
            }
        }

        public function copy($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("copy", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("copy", function(){';
                    $function();
                echo '});';
            }
        }

        public function dblclick($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("dblclick", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("dblclick", function(){';
                    $function();
                echo '});';
            }
        }

        public function drag($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("drag", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("drag", function(){';
                    $function();
                echo '});';
            }
        }

        public function drop($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("drop", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("drop", function(){';
                    $function();
                echo '});';
            }
        }

        public function error($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("error", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("error", function(){';
                    $function();
                echo '});';
            }
        }

        public function focus($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("focus", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("focus", function(){';
                    $function();
                echo '});';
            }
        }

        public function focusin($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("focusin", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("focusin", function(){';
                    $function();
                echo '});';
            }
        }

        public function focusout($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("focusout", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("focusout", function(){';
                    $function();
                echo '});';
            }
        }

        public function play($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("play", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("play", function(){';
                    $function();
                echo '});';
            }
        }

        public function playing($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("playing", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("playing", function(){';
                    $function();
                echo '});';
            }
        }

        public function resize($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("resize", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("resize", function(){';
                    $function();
                echo '});';
            }
        }

        public function mouseenter($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("mouseenter", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("mouseenter", function(){';
                    $function();
                echo '});';
            }
        }

        public function mouseleave($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("mouseleave", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("mouseleave", function(){';
                    $function();
                echo '});';
            }
        }

        public function mouseover($function)
        {
            if($this->type === "id")
            {
                echo 'document.getElementById("' . $this->valueOfAttribute . '").addEventListener("mouseover", function(){';
                    $function();
                echo '});';
            }

            if($this->type === "class")
            {
                echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].addEventListener("mouseover", function(){';
                    $function();
                echo '});';
            }
        }
    }

    /**
     * events class for keyboard and mouse input 
     */
    class inputEvent{
        public function input($function)
        {
            echo 'document.addEventListener("input", function(){';
                $function();
            echo '});';
        }

        public function keydown($function)
        {

            echo 'document.addEventListener("keydown", function(){';
                $function();
            echo '});';
        }

        public function keypress($function)
        {

            echo 'document.addEventListener("keypress", function(){';
                $function();
            echo '});';
        }

        public function keyup($function)
        {
            echo 'document.addEventListener("keyup", function(){';
                $function();
            echo '});';
        }

        public function mousedown($function)
        {

            echo 'document.addEventListener("mousedown", function(){';
                $function();
            echo '});';
        }

        public function mouseup($function)
        {
            echo 'document.addEventListener("mouseup", function(){';
                $function();
            echo '});';
        }

        public function scroll($function)
        {
            echo 'document.addEventListener("scroll", function(){';
                $function();
            echo '});';
        }

        public function wheel($function)
        {
            echo 'document.addEventListener("wheel", function(){';
                $function();
            echo '});';
        }
    }

    class functions{
        public function __construct($valueOfAttribute, $type, $index)
        {
            $this->valueOfAttribute = $valueOfAttribute;
            $this->type = $type;
            $this->index = $index;
        }

        public function val($val = "")
        {
            if(!empty($val))
            {
                if(!is_array($val))
                {
                    if($this->type === "id")
                        echo 'document.getElementById("' . $this->valueOfAttribute . '").innerHTML = "' . $val . '";';
                    if($this->type === "class")
                        echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].innerHTML = "' . $val . '";';
                }else{
                    if($this->type === "id")
                        echo 'document.getElementById("' . $this->valueOfAttribute . '").innerHTML = ' . $val[0] . ';';
                    if($this->type === "class")
                        echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].innerHTML = ' . $val[0] . ';';
                }
            }else{
                if($this->type === "id")
                    return array('document.getElementById("' . $this->valueOfAttribute . '").innerHTML');
                if($this->type === "class")
                    return array('document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].innerHTML');
            }
        }

        public function appendVal($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").innerHTML += "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].innerHTML += "' . $val . '";';
            }else{
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").innerHTML += ' . $val[0] . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].innerHTML += ' . $val[0] . ';';
            }
        }

        public function inputVal($val = "")
        {
            if(!empty($val))
            {
                if(!is_array($val))
                {
                    if($this->type === "id")
                        echo 'document.getElementById("' . $this->valueOfAttribute . '").value = "' . $val . '";';
                    if($this->type === "class")
                        echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].value = "' . $val . '";';
                }else{
                    if($this->type === "id")
                        echo 'document.getElementById("' . $this->valueOfAttribute . '").value = ' . $val[0] . ';';
                    if($this->type === "class")
                        echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].value = ' . $val[0] . ';';
                }
            }else{
                if($this->type === "id")
                    return array("document.getElementById('" . $this->valueOfAttribute . "').value");
                if($this->type === "class")
                    return array("document.getElementsByClassName('" . $this->valueOfAttribute . "')[" . $this->index . "].value");
            }
        }

        public function appendInputVal($val)
        {
            if(!is_array($val))
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").value += "' . $val . '";';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].value += "' . $val . '";';
            }else{
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").value += ' . $val[0] . ';';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].value += ' . $val[0] . ';';
            }
        }

        public function style()
        {
            $style = new style($this->valueOfAttribute, $this->type, $this->index);
            return $style;
        }

        public function event()
        {
            $event = new event($this->valueOfAttribute, $this->type, $this->index);
            return $event;
        }

        public function appendTo($type, $valueOfAttribute, $index = 0)
        {
            if($type === "id")
            {
                if($this->type === "id")
                    echo 'document.getElementById("' . $valueOfAttribute . '").appendChild(document.getElementById("' . $this->valueOfAttribute . '"));';
                if($this->type === "class")
                    echo 'document.getElementById("' . $valueOfAttribute . '").appendChild(document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . ']);';
            }

            if($type === "class")
            {
                if($this->type === "id")
                    echo 'document.getElementsByClassName("' . $valueOfAttribute . '")[' . $index . '].appendChild(document.getElementById("' . $this->valueOfAttribute . '"));';
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $valueOfAttribute . '")[' . $index . '].appendChild(document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . ']);';
            }
        }

        public function attr($attr, $val = "")
        {
            if(!empty($val))
            {
                if(!is_array($val))
                {
                    if($this->type === "id")
                        echo 'document.getElementById("' . $this->valueOfAttribute . '").setAttribute("' . $attr . '", "' . $val . '");'; 
                    if($this->type === "class")
                        echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].setAttribute("' . $attr . '", "' . $val . '");'; 
                }else{
                    if($this->type === "id")
                        echo 'document.getElementById("' . $this->valueOfAttribute . '").setAttribute("' . $attr . '", ' . $val . ');'; 
                    if($this->type === "class")
                        echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].setAttribute("' . $attr . '", ' . $val . ');'; 
                }
            }else{
                if($this->type === "id")
                    echo 'document.getElementById("' . $this->valueOfAttribute . '").getAttribute("' . $attr . '");'; 
                if($this->type === "class")
                    echo 'document.getElementsByClassName("' . $this->valueOfAttribute . '")[' . $this->index . '].getAttribute("' . $attr . '");'; 
            }
        }
    }

    /**
     * class for JS localStorage
     */
    class storage{
        function set($attr, $val)
        {
            echo 'localStorage.setItem("' . $attr . '", "' . $val . '");';
        }

        function get($attr)
        {
            return array("localStorage.getItem('" . $attr . "')");
        }
    }

    /**
     * main class
     */
    class document{          
        public function id($id)
        {
            $functions = new functions($id, "id", 0);
            return $functions;
        }

        public function class($class, $index = 0)
        {
            $functions = new functions($class, "class", $index);
            return $functions;
        }

        public function alert($msg)
        {
            if(!is_array($msg))
                echo 'alert("' . $msg . '");';
            else
                echo 'alert(' . $msg[0] . ');';
        }

        public function log($msg)
        {
            if(!is_array($msg))
                echo 'console.log("' . $msg . '");';
            else
                echo 'console.log(' . $msg[0] . ');';
        }

        public function createElement($type, $id = "", $class = "", $name = "")
        {
            echo 'var x = document.createElement("' . $type . '");';
            echo 'document.body.appendChild(x);';
            echo 'x.setAttribute("id", "' . $id . '");';
            echo 'x.setAttribute("class", "' . $class . '");';
            echo 'x.setAttribute("name", "' . $name . '");';
        }

        public function localStorage()
        {
            $storage = new storage;
            return $storage;
        }

        public function inputEvent()
        {
            $inputEvent = new inputEvent;
            return $inputEvent;
        }

        public function sum($first, $second)
        {
            return array($first[0] . ' + ' . $second[0]);
        }

        public function sub($first, $second)
        {
            return array($first[0] . ' - ' . $second[0]);
        }

        public function div($first, $second)
        {
            return array($first[0] . ' / ' . $second[0]);
        }

        public function mul($first, $second)
        {
            return array($first[0] . ' * ' . $second[0]);
        }
    }

    $document = new document;
?>