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
        $__internal_66e12228d2e9f7be37390891c7f208650892db583bb81e69545cc3e61a1a69a5 = $this->env->getExtension("native_profiler");
        $__internal_66e12228d2e9f7be37390891c7f208650892db583bb81e69545cc3e61a1a69a5->enter($__internal_66e12228d2e9f7be37390891c7f208650892db583bb81e69545cc3e61a1a69a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e12228d2e9f7be37390891c7f208650892db583bb81e69545cc3e61a1a69a5->leave($__internal_66e12228d2e9f7be37390891c7f208650892db583bb81e69545cc3e61a1a69a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7ec1595f67d86d20517e0e6dac3720d14a613dbb2d2439914970287f31f42dc = $this->env->getExtension("native_profiler");
        $__internal_d7ec1595f67d86d20517e0e6dac3720d14a613dbb2d2439914970287f31f42dc->enter($__internal_d7ec1595f67d86d20517e0e6dac3720d14a613dbb2d2439914970287f31f42dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d7ec1595f67d86d20517e0e6dac3720d14a613dbb2d2439914970287f31f42dc->leave($__internal_d7ec1595f67d86d20517e0e6dac3720d14a613dbb2d2439914970287f31f42dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed2838008160ce2c55bb93bb7af2b2b08d1a61b41a3d9cea1cbd5d802a83814 = $this->env->getExtension("native_profiler");
        $__internal_1ed2838008160ce2c55bb93bb7af2b2b08d1a61b41a3d9cea1cbd5d802a83814->enter($__internal_1ed2838008160ce2c55bb93bb7af2b2b08d1a61b41a3d9cea1cbd5d802a83814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ed2838008160ce2c55bb93bb7af2b2b08d1a61b41a3d9cea1cbd5d802a83814->leave($__internal_1ed2838008160ce2c55bb93bb7af2b2b08d1a61b41a3d9cea1cbd5d802a83814_prof);

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
