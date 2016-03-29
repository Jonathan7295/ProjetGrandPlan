<?php

/* layout/css/stylesite.css */
class __TwigTemplate_6f0dd1342b6f77e51945c1ba7618dfa0d93df9213166108f0459717a00c49f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72462a2da7619e9e980579bf18c619b883eff10d8fb6efe04ce6a4b44262833a = $this->env->getExtension("native_profiler");
        $__internal_72462a2da7619e9e980579bf18c619b883eff10d8fb6efe04ce6a4b44262833a->enter($__internal_72462a2da7619e9e980579bf18c619b883eff10d8fb6efe04ce6a4b44262833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/css/stylesite.css"));

        // line 1
        echo "\t\tbody {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\toverflow: hidden;
\t\t\theight: 100%; 
\t\t\tmax-height: 100%; 
\t\t\tfont-family:Sans-serif;
\t\t\tline-height: 1.5em;
\t\t}
\t\t
\t\t#header {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100px; 
\t\t\toverflow: hidden; /* Disables scrollbars on the header frame. To enable scrollbars, change \"hidden\" to \"scroll\" */
\t\t\tbackground: #BCCE98;
\t\t}
\t\t
\t\t#nav {
\t\t\tposition: absolute; 
\t\t\ttop: 100px; 
\t\t\tleft: 0; 
\t\t\tbottom: 0;
\t\t\twidth: 230px;
\t\t\toverflow: auto; /* Scrollbars will appear on this frame only when there's enough content to require scrolling. To disable scrollbars, change to \"hidden\", or use \"scroll\" to enable permanent scrollbars */
\t\t\tbackground: #DAE9BC; \t\t
\t\t}
\t\t
\t\t#logo {
\t\t\tpadding:10px;
\t\t}
\t\t
\t\tmain {
\t\t\tposition: fixed;
\t\t\ttop: 100px; /* Set this to the height of the header */
\t\t\tleft: 230px; 
\t\t\tright: 0;
\t\t\tbottom: 0;
\t\t\toverflow: auto; 
\t\t\tbackground: #fff;
\t\t}
\t\t
\t\t.innertube {
\t\t\tmargin: 15px; /* Provides padding for the content */
\t\t}
\t\t
\t\tp {
\t\t\tcolor: #555;
\t\t}

\t\tnav ul {
\t\t\tlist-style-type: none;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t}
\t\t
\t\tnav ul a {
\t\t\tcolor: darkgreen;
\t\t\ttext-decoration: none;
\t\t}
\t\t\t\t
\t\t/*IE6 fix*/
\t\t* html body{
\t\t\tpadding: 100px 0 0 230px; /* Set the first value to the height of the header and last value to the width of the nav */
\t\t}
\t\t
\t\t* html main{ 
\t\t\theight: 100%; 
\t\t\twidth: 100%; 
\t\t}";
        
        $__internal_72462a2da7619e9e980579bf18c619b883eff10d8fb6efe04ce6a4b44262833a->leave($__internal_72462a2da7619e9e980579bf18c619b883eff10d8fb6efe04ce6a4b44262833a_prof);

    }

    public function getTemplateName()
    {
        return "layout/css/stylesite.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* 		body {*/
/* 			margin: 0;*/
/* 			padding: 0;*/
/* 			overflow: hidden;*/
/* 			height: 100%; */
/* 			max-height: 100%; */
/* 			font-family:Sans-serif;*/
/* 			line-height: 1.5em;*/
/* 		}*/
/* 		*/
/* 		#header {*/
/* 			position: absolute;*/
/* 			top: 0;*/
/* 			left: 0;*/
/* 			width: 100%;*/
/* 			height: 100px; */
/* 			overflow: hidden; /* Disables scrollbars on the header frame. To enable scrollbars, change "hidden" to "scroll" *//* */
/* 			background: #BCCE98;*/
/* 		}*/
/* 		*/
/* 		#nav {*/
/* 			position: absolute; */
/* 			top: 100px; */
/* 			left: 0; */
/* 			bottom: 0;*/
/* 			width: 230px;*/
/* 			overflow: auto; /* Scrollbars will appear on this frame only when there's enough content to require scrolling. To disable scrollbars, change to "hidden", or use "scroll" to enable permanent scrollbars *//* */
/* 			background: #DAE9BC; 		*/
/* 		}*/
/* 		*/
/* 		#logo {*/
/* 			padding:10px;*/
/* 		}*/
/* 		*/
/* 		main {*/
/* 			position: fixed;*/
/* 			top: 100px; /* Set this to the height of the header *//* */
/* 			left: 230px; */
/* 			right: 0;*/
/* 			bottom: 0;*/
/* 			overflow: auto; */
/* 			background: #fff;*/
/* 		}*/
/* 		*/
/* 		.innertube {*/
/* 			margin: 15px; /* Provides padding for the content *//* */
/* 		}*/
/* 		*/
/* 		p {*/
/* 			color: #555;*/
/* 		}*/
/* */
/* 		nav ul {*/
/* 			list-style-type: none;*/
/* 			margin: 0;*/
/* 			padding: 0;*/
/* 		}*/
/* 		*/
/* 		nav ul a {*/
/* 			color: darkgreen;*/
/* 			text-decoration: none;*/
/* 		}*/
/* 				*/
/* 		/*IE6 fix*//* */
/* 		* html body{*/
/* 			padding: 100px 0 0 230px; /* Set the first value to the height of the header and last value to the width of the nav *//* */
/* 		}*/
/* 		*/
/* 		* html main{ */
/* 			height: 100%; */
/* 			width: 100%; */
/* 		}*/
