<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09c4b6b7abb4d126d058e30be61d91bf75dfb60f1a004c2a678f0d2735560570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7195aafce78977af909c77fab4c1f0bb4aa78f0530a24066186bde477da45046 = $this->env->getExtension("native_profiler");
        $__internal_7195aafce78977af909c77fab4c1f0bb4aa78f0530a24066186bde477da45046->enter($__internal_7195aafce78977af909c77fab4c1f0bb4aa78f0530a24066186bde477da45046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7195aafce78977af909c77fab4c1f0bb4aa78f0530a24066186bde477da45046->leave($__internal_7195aafce78977af909c77fab4c1f0bb4aa78f0530a24066186bde477da45046_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d028e52bdfc8b3102b017a0f007fa2275fb46f4177a3d8912e94b61fa333f094 = $this->env->getExtension("native_profiler");
        $__internal_d028e52bdfc8b3102b017a0f007fa2275fb46f4177a3d8912e94b61fa333f094->enter($__internal_d028e52bdfc8b3102b017a0f007fa2275fb46f4177a3d8912e94b61fa333f094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d028e52bdfc8b3102b017a0f007fa2275fb46f4177a3d8912e94b61fa333f094->leave($__internal_d028e52bdfc8b3102b017a0f007fa2275fb46f4177a3d8912e94b61fa333f094_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbe8f773edd449325cc660aa260b0b45049df1000053a40f2632feafed73fb39 = $this->env->getExtension("native_profiler");
        $__internal_bbe8f773edd449325cc660aa260b0b45049df1000053a40f2632feafed73fb39->enter($__internal_bbe8f773edd449325cc660aa260b0b45049df1000053a40f2632feafed73fb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bbe8f773edd449325cc660aa260b0b45049df1000053a40f2632feafed73fb39->leave($__internal_bbe8f773edd449325cc660aa260b0b45049df1000053a40f2632feafed73fb39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
