<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_7024b30f383e97d2c72783eae25d9f1aaf7aeb99f5843afdc0c55b3c96f6dc1c extends Twig_Template
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
        $__internal_c40a6b01344e246b557a432a8db9075c8c586d0459804b65daec47ada9793ce2 = $this->env->getExtension("native_profiler");
        $__internal_c40a6b01344e246b557a432a8db9075c8c586d0459804b65daec47ada9793ce2->enter($__internal_c40a6b01344e246b557a432a8db9075c8c586d0459804b65daec47ada9793ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        
        $__internal_c40a6b01344e246b557a432a8db9075c8c586d0459804b65daec47ada9793ce2->leave($__internal_c40a6b01344e246b557a432a8db9075c8c586d0459804b65daec47ada9793ce2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7e53cd078f1cad71665e033ef48604d891ee0018a8fe470eab82c6dc6576f52 = $this->env->getExtension("native_profiler");
        $__internal_e7e53cd078f1cad71665e033ef48604d891ee0018a8fe470eab82c6dc6576f52->enter($__internal_e7e53cd078f1cad71665e033ef48604d891ee0018a8fe470eab82c6dc6576f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7e53cd078f1cad71665e033ef48604d891ee0018a8fe470eab82c6dc6576f52->leave($__internal_e7e53cd078f1cad71665e033ef48604d891ee0018a8fe470eab82c6dc6576f52_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c200afb36f6b8b820efae0587bee248ea1ecdde6f4b6c2d434ad1c4a535ad47 = $this->env->getExtension("native_profiler");
        $__internal_5c200afb36f6b8b820efae0587bee248ea1ecdde6f4b6c2d434ad1c4a535ad47->enter($__internal_5c200afb36f6b8b820efae0587bee248ea1ecdde6f4b6c2d434ad1c4a535ad47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c200afb36f6b8b820efae0587bee248ea1ecdde6f4b6c2d434ad1c4a535ad47->leave($__internal_5c200afb36f6b8b820efae0587bee248ea1ecdde6f4b6c2d434ad1c4a535ad47_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f1bfafe37e84e7dc612768b5db133ad8907fac4afa7fbff399822460fd08695 = $this->env->getExtension("native_profiler");
        $__internal_3f1bfafe37e84e7dc612768b5db133ad8907fac4afa7fbff399822460fd08695->enter($__internal_3f1bfafe37e84e7dc612768b5db133ad8907fac4afa7fbff399822460fd08695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f1bfafe37e84e7dc612768b5db133ad8907fac4afa7fbff399822460fd08695->leave($__internal_3f1bfafe37e84e7dc612768b5db133ad8907fac4afa7fbff399822460fd08695_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
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
