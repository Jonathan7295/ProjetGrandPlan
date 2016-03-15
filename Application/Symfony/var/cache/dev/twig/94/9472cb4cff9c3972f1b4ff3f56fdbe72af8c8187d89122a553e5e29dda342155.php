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
        $__internal_44f52637c7eb35fb28a3589ea7c84860ee33acb6583d8b2bf027123d3eb5ec80 = $this->env->getExtension("native_profiler");
        $__internal_44f52637c7eb35fb28a3589ea7c84860ee33acb6583d8b2bf027123d3eb5ec80->enter($__internal_44f52637c7eb35fb28a3589ea7c84860ee33acb6583d8b2bf027123d3eb5ec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f52637c7eb35fb28a3589ea7c84860ee33acb6583d8b2bf027123d3eb5ec80->leave($__internal_44f52637c7eb35fb28a3589ea7c84860ee33acb6583d8b2bf027123d3eb5ec80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6df50e3e6dfc3dbedf6e4284ebc079c682596468e0e7eed239c8fb428d6f5496 = $this->env->getExtension("native_profiler");
        $__internal_6df50e3e6dfc3dbedf6e4284ebc079c682596468e0e7eed239c8fb428d6f5496->enter($__internal_6df50e3e6dfc3dbedf6e4284ebc079c682596468e0e7eed239c8fb428d6f5496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6df50e3e6dfc3dbedf6e4284ebc079c682596468e0e7eed239c8fb428d6f5496->leave($__internal_6df50e3e6dfc3dbedf6e4284ebc079c682596468e0e7eed239c8fb428d6f5496_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92e2afd8e9b566be019ad7eaf398df4d2e5173c4361de78bea301fc6d0050c58 = $this->env->getExtension("native_profiler");
        $__internal_92e2afd8e9b566be019ad7eaf398df4d2e5173c4361de78bea301fc6d0050c58->enter($__internal_92e2afd8e9b566be019ad7eaf398df4d2e5173c4361de78bea301fc6d0050c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92e2afd8e9b566be019ad7eaf398df4d2e5173c4361de78bea301fc6d0050c58->leave($__internal_92e2afd8e9b566be019ad7eaf398df4d2e5173c4361de78bea301fc6d0050c58_prof);

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