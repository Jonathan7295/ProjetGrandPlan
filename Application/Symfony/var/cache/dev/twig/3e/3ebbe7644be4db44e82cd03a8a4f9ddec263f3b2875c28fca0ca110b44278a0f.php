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
        $__internal_b458a7b7e4e3ce0f97f4442dbb7457b09bfa5ae0261b3124219f41d3ce5ce84b = $this->env->getExtension("native_profiler");
        $__internal_b458a7b7e4e3ce0f97f4442dbb7457b09bfa5ae0261b3124219f41d3ce5ce84b->enter($__internal_b458a7b7e4e3ce0f97f4442dbb7457b09bfa5ae0261b3124219f41d3ce5ce84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b458a7b7e4e3ce0f97f4442dbb7457b09bfa5ae0261b3124219f41d3ce5ce84b->leave($__internal_b458a7b7e4e3ce0f97f4442dbb7457b09bfa5ae0261b3124219f41d3ce5ce84b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c3a2860307ec241c2fe52de12a8ddc760ec20794fd6bdd7c2c1cec9b6270e23 = $this->env->getExtension("native_profiler");
        $__internal_2c3a2860307ec241c2fe52de12a8ddc760ec20794fd6bdd7c2c1cec9b6270e23->enter($__internal_2c3a2860307ec241c2fe52de12a8ddc760ec20794fd6bdd7c2c1cec9b6270e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c3a2860307ec241c2fe52de12a8ddc760ec20794fd6bdd7c2c1cec9b6270e23->leave($__internal_2c3a2860307ec241c2fe52de12a8ddc760ec20794fd6bdd7c2c1cec9b6270e23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a993aac838590ce0eac7c98de20af7fac9c62aa7525cbed5c5811c2f2699c78a = $this->env->getExtension("native_profiler");
        $__internal_a993aac838590ce0eac7c98de20af7fac9c62aa7525cbed5c5811c2f2699c78a->enter($__internal_a993aac838590ce0eac7c98de20af7fac9c62aa7525cbed5c5811c2f2699c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a993aac838590ce0eac7c98de20af7fac9c62aa7525cbed5c5811c2f2699c78a->leave($__internal_a993aac838590ce0eac7c98de20af7fac9c62aa7525cbed5c5811c2f2699c78a_prof);

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
