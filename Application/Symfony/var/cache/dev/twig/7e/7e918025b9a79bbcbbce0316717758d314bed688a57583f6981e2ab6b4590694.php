<?php

/* layout/layout.html.twig */
class __TwigTemplate_4efe9fa79f7a9cb6e7237207f0c31b8a6d128cc5a005af63d012e5d21b8873a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7efff4cddbe7e4bfdd3cfa43510eb28fe14a7e0ec50f1341e1e44e6ef2cdd61 = $this->env->getExtension("native_profiler");
        $__internal_a7efff4cddbe7e4bfdd3cfa43510eb28fe14a7e0ec50f1341e1e44e6ef2cdd61->enter($__internal_a7efff4cddbe7e4bfdd3cfa43510eb28fe14a7e0ec50f1341e1e44e6ef2cdd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/stylesite.css\"/>
        <script type=\"text/javascript\">
            /* =============================
            This script generates sample text for the body content. 
            You can remove this script and any reference to it. 
             ============================= */
            var bodyText=[\"The smaller your reality, the more convinced you are that you know everything.\", \"If the facts don't fit the theory, change the facts.\", \"The past has no power over the present moment.\", \"This, too, will pass.\", \"</p><p>You will not be punished for your anger, you will be punished by your anger.\", \"Peace comes from within. Do not seek it without.\", \"<h3>Heading</h3><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now.\"]
            function generateText(sentenceCount){
                for (var i=0; i<sentenceCount; i++)
                document.write(bodyText[Math.floor(Math.random()*7)]+\" \")
            }
        </script>
    </head>
    <body>
        <header id=\"header\">
            <div id=\"logo\">
                <h1>Grand Angle</h1>
            </div>
        </header>
        <main>
            <div class=\"innertube\">
                ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        echo "  
            </div>
        </main>
        <nav id=\"nav\">
            <div class=\"innertube\">
                <h1>Heading</h1>
                <ul>
                    <li><a href=\"#\">Link 1</a></li>
                    <li><a href=\"#\">Link 2</a></li>
                    <li><a href=\"#\">Link 3</a></li>
                    <li><a href=\"#\">Link 4</a></li>
                    <li><a href=\"#\">Link 5</a></li>
                </ul>
                <h1>Heading</h1>
                <ul>
                    <li><a href=\"#\">Link 1</a></li>
                    <li><a href=\"#\">Link 2</a></li>
                    <li><a href=\"#\">Link 3</a></li>
                    <li><a href=\"#\">Link 4</a></li>
                    <li><a href=\"#\">Link 5</a></li>
                </ul>
                <h1>Heading</h1>
                <ul>
                    <li><a href=\"#\">Link 1</a></li>
                    <li><a href=\"#\">Link 2</a></li>
                    <li><a href=\"#\">Link 3</a></li>
                    <li><a href=\"#\">Link 4</a></li>
                    <li><a href=\"#\">Link 5</a></li>
                </ul>
            </div>
        </nav>  
    </body>
</html>";
        
        $__internal_a7efff4cddbe7e4bfdd3cfa43510eb28fe14a7e0ec50f1341e1e44e6ef2cdd61->leave($__internal_a7efff4cddbe7e4bfdd3cfa43510eb28fe14a7e0ec50f1341e1e44e6ef2cdd61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef252e843240907a29237f748d35541cef270592089ef37867bf2056139d3f07 = $this->env->getExtension("native_profiler");
        $__internal_ef252e843240907a29237f748d35541cef270592089ef37867bf2056139d3f07->enter($__internal_ef252e843240907a29237f748d35541cef270592089ef37867bf2056139d3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ef252e843240907a29237f748d35541cef270592089ef37867bf2056139d3f07->leave($__internal_ef252e843240907a29237f748d35541cef270592089ef37867bf2056139d3f07_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_89dac8c02084f8e1502130c5915198ea35faf42741b76311d8f0cb08efca0761 = $this->env->getExtension("native_profiler");
        $__internal_89dac8c02084f8e1502130c5915198ea35faf42741b76311d8f0cb08efca0761->enter($__internal_89dac8c02084f8e1502130c5915198ea35faf42741b76311d8f0cb08efca0761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89dac8c02084f8e1502130c5915198ea35faf42741b76311d8f0cb08efca0761->leave($__internal_89dac8c02084f8e1502130c5915198ea35faf42741b76311d8f0cb08efca0761_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd2c832e7087798edc551ee7bd4b36c97b88dcbdd0ebedf73729e56c54d3520e = $this->env->getExtension("native_profiler");
        $__internal_bd2c832e7087798edc551ee7bd4b36c97b88dcbdd0ebedf73729e56c54d3520e->enter($__internal_bd2c832e7087798edc551ee7bd4b36c97b88dcbdd0ebedf73729e56c54d3520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd2c832e7087798edc551ee7bd4b36c97b88dcbdd0ebedf73729e56c54d3520e->leave($__internal_bd2c832e7087798edc551ee7bd4b36c97b88dcbdd0ebedf73729e56c54d3520e_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  111 => 27,  99 => 5,  58 => 28,  56 => 27,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="../css/stylesite.css"/>*/
/*         <script type="text/javascript">*/
/*             /* =============================*/
/*             This script generates sample text for the body content. */
/*             You can remove this script and any reference to it. */
/*              ============================= *//* */
/*             var bodyText=["The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", "<h3>Heading</h3><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."]*/
/*             function generateText(sentenceCount){*/
/*                 for (var i=0; i<sentenceCount; i++)*/
/*                 document.write(bodyText[Math.floor(Math.random()*7)]+" ")*/
/*             }*/
/*         </script>*/
/*     </head>*/
/*     <body>*/
/*         <header id="header">*/
/*             <div id="logo">*/
/*                 <h1>Grand Angle</h1>*/
/*             </div>*/
/*         </header>*/
/*         <main>*/
/*             <div class="innertube">*/
/*                 {% block body %}{% endblock %}*/
/*                 {% block javascripts %}{% endblock %}  */
/*             </div>*/
/*         </main>*/
/*         <nav id="nav">*/
/*             <div class="innertube">*/
/*                 <h1>Heading</h1>*/
/*                 <ul>*/
/*                     <li><a href="#">Link 1</a></li>*/
/*                     <li><a href="#">Link 2</a></li>*/
/*                     <li><a href="#">Link 3</a></li>*/
/*                     <li><a href="#">Link 4</a></li>*/
/*                     <li><a href="#">Link 5</a></li>*/
/*                 </ul>*/
/*                 <h1>Heading</h1>*/
/*                 <ul>*/
/*                     <li><a href="#">Link 1</a></li>*/
/*                     <li><a href="#">Link 2</a></li>*/
/*                     <li><a href="#">Link 3</a></li>*/
/*                     <li><a href="#">Link 4</a></li>*/
/*                     <li><a href="#">Link 5</a></li>*/
/*                 </ul>*/
/*                 <h1>Heading</h1>*/
/*                 <ul>*/
/*                     <li><a href="#">Link 1</a></li>*/
/*                     <li><a href="#">Link 2</a></li>*/
/*                     <li><a href="#">Link 3</a></li>*/
/*                     <li><a href="#">Link 4</a></li>*/
/*                     <li><a href="#">Link 5</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>  */
/*     </body>*/
/* </html>*/
