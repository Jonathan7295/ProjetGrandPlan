<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cbf1fe2efee29b2065716516bf781d01a90ad2c052ba3a6a33fe3c6ed2be6753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_82dd8bd3cab71e6e8741145c235b873c012fcd5ba2bc03d4ddf2acdaf4f860dc = $this->env->getExtension("native_profiler");
        $__internal_82dd8bd3cab71e6e8741145c235b873c012fcd5ba2bc03d4ddf2acdaf4f860dc->enter($__internal_82dd8bd3cab71e6e8741145c235b873c012fcd5ba2bc03d4ddf2acdaf4f860dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82dd8bd3cab71e6e8741145c235b873c012fcd5ba2bc03d4ddf2acdaf4f860dc->leave($__internal_82dd8bd3cab71e6e8741145c235b873c012fcd5ba2bc03d4ddf2acdaf4f860dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_762a2975ca92e91dfc8f1f104f30cec86ab49247da2a3dbb24b796bd499496f8 = $this->env->getExtension("native_profiler");
        $__internal_762a2975ca92e91dfc8f1f104f30cec86ab49247da2a3dbb24b796bd499496f8->enter($__internal_762a2975ca92e91dfc8f1f104f30cec86ab49247da2a3dbb24b796bd499496f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_762a2975ca92e91dfc8f1f104f30cec86ab49247da2a3dbb24b796bd499496f8->leave($__internal_762a2975ca92e91dfc8f1f104f30cec86ab49247da2a3dbb24b796bd499496f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf5ef20aa3c2a6b9aaff4207283d554a233bf50098cafa51186974d5bf554d28 = $this->env->getExtension("native_profiler");
        $__internal_cf5ef20aa3c2a6b9aaff4207283d554a233bf50098cafa51186974d5bf554d28->enter($__internal_cf5ef20aa3c2a6b9aaff4207283d554a233bf50098cafa51186974d5bf554d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf5ef20aa3c2a6b9aaff4207283d554a233bf50098cafa51186974d5bf554d28->leave($__internal_cf5ef20aa3c2a6b9aaff4207283d554a233bf50098cafa51186974d5bf554d28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
