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
        $__internal_29167d40b04f788db6f7cf108d2740f96e27a1e6009f584296b6ec547f00a92d = $this->env->getExtension("native_profiler");
        $__internal_29167d40b04f788db6f7cf108d2740f96e27a1e6009f584296b6ec547f00a92d->enter($__internal_29167d40b04f788db6f7cf108d2740f96e27a1e6009f584296b6ec547f00a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29167d40b04f788db6f7cf108d2740f96e27a1e6009f584296b6ec547f00a92d->leave($__internal_29167d40b04f788db6f7cf108d2740f96e27a1e6009f584296b6ec547f00a92d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_910c122468aacade2a38e8649633d7afd46985ba9cf503c90d516054436bda1b = $this->env->getExtension("native_profiler");
        $__internal_910c122468aacade2a38e8649633d7afd46985ba9cf503c90d516054436bda1b->enter($__internal_910c122468aacade2a38e8649633d7afd46985ba9cf503c90d516054436bda1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_910c122468aacade2a38e8649633d7afd46985ba9cf503c90d516054436bda1b->leave($__internal_910c122468aacade2a38e8649633d7afd46985ba9cf503c90d516054436bda1b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_529b7ae1a66133d8a8c81b208598ad489a4d69af6215fd8b4aca0b081dbeeaf4 = $this->env->getExtension("native_profiler");
        $__internal_529b7ae1a66133d8a8c81b208598ad489a4d69af6215fd8b4aca0b081dbeeaf4->enter($__internal_529b7ae1a66133d8a8c81b208598ad489a4d69af6215fd8b4aca0b081dbeeaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_529b7ae1a66133d8a8c81b208598ad489a4d69af6215fd8b4aca0b081dbeeaf4->leave($__internal_529b7ae1a66133d8a8c81b208598ad489a4d69af6215fd8b4aca0b081dbeeaf4_prof);

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
