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
        $__internal_df04d4241e0b22c41353919e802a14de64c0c7751f5ef8252d9f0c8cfccf83bb = $this->env->getExtension("native_profiler");
        $__internal_df04d4241e0b22c41353919e802a14de64c0c7751f5ef8252d9f0c8cfccf83bb->enter($__internal_df04d4241e0b22c41353919e802a14de64c0c7751f5ef8252d9f0c8cfccf83bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        
        $__internal_df04d4241e0b22c41353919e802a14de64c0c7751f5ef8252d9f0c8cfccf83bb->leave($__internal_df04d4241e0b22c41353919e802a14de64c0c7751f5ef8252d9f0c8cfccf83bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bf47037ec040dae8569c0ce90b118c6f867e82e1307b0abd27b11e0bc0dd341 = $this->env->getExtension("native_profiler");
        $__internal_6bf47037ec040dae8569c0ce90b118c6f867e82e1307b0abd27b11e0bc0dd341->enter($__internal_6bf47037ec040dae8569c0ce90b118c6f867e82e1307b0abd27b11e0bc0dd341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6bf47037ec040dae8569c0ce90b118c6f867e82e1307b0abd27b11e0bc0dd341->leave($__internal_6bf47037ec040dae8569c0ce90b118c6f867e82e1307b0abd27b11e0bc0dd341_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d91f2366c104cb47998de1458d31c1d3d401974adccdf9361f3e72ace4054ef = $this->env->getExtension("native_profiler");
        $__internal_8d91f2366c104cb47998de1458d31c1d3d401974adccdf9361f3e72ace4054ef->enter($__internal_8d91f2366c104cb47998de1458d31c1d3d401974adccdf9361f3e72ace4054ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d91f2366c104cb47998de1458d31c1d3d401974adccdf9361f3e72ace4054ef->leave($__internal_8d91f2366c104cb47998de1458d31c1d3d401974adccdf9361f3e72ace4054ef_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fecac937f7ee2fc7e7724b1ccb4f5562476655c92b20495f98cb3908f852f939 = $this->env->getExtension("native_profiler");
        $__internal_fecac937f7ee2fc7e7724b1ccb4f5562476655c92b20495f98cb3908f852f939->enter($__internal_fecac937f7ee2fc7e7724b1ccb4f5562476655c92b20495f98cb3908f852f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fecac937f7ee2fc7e7724b1ccb4f5562476655c92b20495f98cb3908f852f939->leave($__internal_fecac937f7ee2fc7e7724b1ccb4f5562476655c92b20495f98cb3908f852f939_prof);

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
