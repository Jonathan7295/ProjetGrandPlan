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
        $__internal_85389a16a3f94e1ce732ed053801389c9da8b9389d1dff251a379b4aa4c14fee = $this->env->getExtension("native_profiler");
        $__internal_85389a16a3f94e1ce732ed053801389c9da8b9389d1dff251a379b4aa4c14fee->enter($__internal_85389a16a3f94e1ce732ed053801389c9da8b9389d1dff251a379b4aa4c14fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

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
        
        $__internal_85389a16a3f94e1ce732ed053801389c9da8b9389d1dff251a379b4aa4c14fee->leave($__internal_85389a16a3f94e1ce732ed053801389c9da8b9389d1dff251a379b4aa4c14fee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ba87c25f8e61fdc6376ec0f401e25e2f945f4edd67a3e4ded62d7f9e468512c = $this->env->getExtension("native_profiler");
        $__internal_5ba87c25f8e61fdc6376ec0f401e25e2f945f4edd67a3e4ded62d7f9e468512c->enter($__internal_5ba87c25f8e61fdc6376ec0f401e25e2f945f4edd67a3e4ded62d7f9e468512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ba87c25f8e61fdc6376ec0f401e25e2f945f4edd67a3e4ded62d7f9e468512c->leave($__internal_5ba87c25f8e61fdc6376ec0f401e25e2f945f4edd67a3e4ded62d7f9e468512c_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_0089ecbfc0fdf3d1770bc25251ab9ece06643adfdc8fbd1747706ac355edb599 = $this->env->getExtension("native_profiler");
        $__internal_0089ecbfc0fdf3d1770bc25251ab9ece06643adfdc8fbd1747706ac355edb599->enter($__internal_0089ecbfc0fdf3d1770bc25251ab9ece06643adfdc8fbd1747706ac355edb599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0089ecbfc0fdf3d1770bc25251ab9ece06643adfdc8fbd1747706ac355edb599->leave($__internal_0089ecbfc0fdf3d1770bc25251ab9ece06643adfdc8fbd1747706ac355edb599_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e83acb0fdc7d38f047887719e4964c3c3ac85ea8422643c148eccbc1c9e407a = $this->env->getExtension("native_profiler");
        $__internal_8e83acb0fdc7d38f047887719e4964c3c3ac85ea8422643c148eccbc1c9e407a->enter($__internal_8e83acb0fdc7d38f047887719e4964c3c3ac85ea8422643c148eccbc1c9e407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e83acb0fdc7d38f047887719e4964c3c3ac85ea8422643c148eccbc1c9e407a->leave($__internal_8e83acb0fdc7d38f047887719e4964c3c3ac85ea8422643c148eccbc1c9e407a_prof);

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
