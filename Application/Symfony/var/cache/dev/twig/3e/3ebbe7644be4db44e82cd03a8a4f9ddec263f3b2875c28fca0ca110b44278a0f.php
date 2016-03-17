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
        $__internal_5decf19bf57140b409c200c2de077db98057bd9187f2bb393b5be273e0ad8327 = $this->env->getExtension("native_profiler");
        $__internal_5decf19bf57140b409c200c2de077db98057bd9187f2bb393b5be273e0ad8327->enter($__internal_5decf19bf57140b409c200c2de077db98057bd9187f2bb393b5be273e0ad8327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5decf19bf57140b409c200c2de077db98057bd9187f2bb393b5be273e0ad8327->leave($__internal_5decf19bf57140b409c200c2de077db98057bd9187f2bb393b5be273e0ad8327_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bad44e935174d55dfd6de99cf1728c8dce1235f8c8a86e95bc9050d36376c2d5 = $this->env->getExtension("native_profiler");
        $__internal_bad44e935174d55dfd6de99cf1728c8dce1235f8c8a86e95bc9050d36376c2d5->enter($__internal_bad44e935174d55dfd6de99cf1728c8dce1235f8c8a86e95bc9050d36376c2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bad44e935174d55dfd6de99cf1728c8dce1235f8c8a86e95bc9050d36376c2d5->leave($__internal_bad44e935174d55dfd6de99cf1728c8dce1235f8c8a86e95bc9050d36376c2d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_44b13f5de3f93bab1edca8a7bbf05b502cce07d5d2995a9e1a3540e0339a9531 = $this->env->getExtension("native_profiler");
        $__internal_44b13f5de3f93bab1edca8a7bbf05b502cce07d5d2995a9e1a3540e0339a9531->enter($__internal_44b13f5de3f93bab1edca8a7bbf05b502cce07d5d2995a9e1a3540e0339a9531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44b13f5de3f93bab1edca8a7bbf05b502cce07d5d2995a9e1a3540e0339a9531->leave($__internal_44b13f5de3f93bab1edca8a7bbf05b502cce07d5d2995a9e1a3540e0339a9531_prof);

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
