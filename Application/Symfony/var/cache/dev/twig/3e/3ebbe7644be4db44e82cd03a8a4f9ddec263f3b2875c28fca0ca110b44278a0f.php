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
        $__internal_b241fc3ac0bf23adf18cfea62a790016f014b08a43ac16b6b461ee15daa8c477 = $this->env->getExtension("native_profiler");
        $__internal_b241fc3ac0bf23adf18cfea62a790016f014b08a43ac16b6b461ee15daa8c477->enter($__internal_b241fc3ac0bf23adf18cfea62a790016f014b08a43ac16b6b461ee15daa8c477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b241fc3ac0bf23adf18cfea62a790016f014b08a43ac16b6b461ee15daa8c477->leave($__internal_b241fc3ac0bf23adf18cfea62a790016f014b08a43ac16b6b461ee15daa8c477_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd618e37d8c0f48be177c6e5b84f28eb9bafe01ce606e7be13e5f2e74681dcd6 = $this->env->getExtension("native_profiler");
        $__internal_fd618e37d8c0f48be177c6e5b84f28eb9bafe01ce606e7be13e5f2e74681dcd6->enter($__internal_fd618e37d8c0f48be177c6e5b84f28eb9bafe01ce606e7be13e5f2e74681dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fd618e37d8c0f48be177c6e5b84f28eb9bafe01ce606e7be13e5f2e74681dcd6->leave($__internal_fd618e37d8c0f48be177c6e5b84f28eb9bafe01ce606e7be13e5f2e74681dcd6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dffccc7d1042d12bbe72c7a1a6a3cad03d367652db7d30a32b5ff40a86807df4 = $this->env->getExtension("native_profiler");
        $__internal_dffccc7d1042d12bbe72c7a1a6a3cad03d367652db7d30a32b5ff40a86807df4->enter($__internal_dffccc7d1042d12bbe72c7a1a6a3cad03d367652db7d30a32b5ff40a86807df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dffccc7d1042d12bbe72c7a1a6a3cad03d367652db7d30a32b5ff40a86807df4->leave($__internal_dffccc7d1042d12bbe72c7a1a6a3cad03d367652db7d30a32b5ff40a86807df4_prof);

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
