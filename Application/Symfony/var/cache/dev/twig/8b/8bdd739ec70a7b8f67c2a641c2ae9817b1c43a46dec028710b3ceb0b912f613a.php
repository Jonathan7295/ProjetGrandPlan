<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9a1f382eb1b6702e89f471915d1a3790be170a8453632f157a6104baecd329cc extends Twig_Template
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
        $__internal_806c431797f36d9003c15ec5ec835321bcea1ece0fb6b6f6a0dcae6b5593c3f1 = $this->env->getExtension("native_profiler");
        $__internal_806c431797f36d9003c15ec5ec835321bcea1ece0fb6b6f6a0dcae6b5593c3f1->enter($__internal_806c431797f36d9003c15ec5ec835321bcea1ece0fb6b6f6a0dcae6b5593c3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_806c431797f36d9003c15ec5ec835321bcea1ece0fb6b6f6a0dcae6b5593c3f1->leave($__internal_806c431797f36d9003c15ec5ec835321bcea1ece0fb6b6f6a0dcae6b5593c3f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
