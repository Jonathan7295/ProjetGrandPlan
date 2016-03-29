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
        $__internal_9104c858633420c105b8a9e0dd9af35d1110065fa3a3e04e9937bb91af241228 = $this->env->getExtension("native_profiler");
        $__internal_9104c858633420c105b8a9e0dd9af35d1110065fa3a3e04e9937bb91af241228->enter($__internal_9104c858633420c105b8a9e0dd9af35d1110065fa3a3e04e9937bb91af241228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9104c858633420c105b8a9e0dd9af35d1110065fa3a3e04e9937bb91af241228->leave($__internal_9104c858633420c105b8a9e0dd9af35d1110065fa3a3e04e9937bb91af241228_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_066cb6fa7a5b8ceec394c06dc8bb03d3fa3a0c1f02c5267bc555f0ddc4e66336 = $this->env->getExtension("native_profiler");
        $__internal_066cb6fa7a5b8ceec394c06dc8bb03d3fa3a0c1f02c5267bc555f0ddc4e66336->enter($__internal_066cb6fa7a5b8ceec394c06dc8bb03d3fa3a0c1f02c5267bc555f0ddc4e66336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_066cb6fa7a5b8ceec394c06dc8bb03d3fa3a0c1f02c5267bc555f0ddc4e66336->leave($__internal_066cb6fa7a5b8ceec394c06dc8bb03d3fa3a0c1f02c5267bc555f0ddc4e66336_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aa840d0bc49db72431da0633fccf43888baa4653ec56ebdfc6753c3449383a5 = $this->env->getExtension("native_profiler");
        $__internal_9aa840d0bc49db72431da0633fccf43888baa4653ec56ebdfc6753c3449383a5->enter($__internal_9aa840d0bc49db72431da0633fccf43888baa4653ec56ebdfc6753c3449383a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9aa840d0bc49db72431da0633fccf43888baa4653ec56ebdfc6753c3449383a5->leave($__internal_9aa840d0bc49db72431da0633fccf43888baa4653ec56ebdfc6753c3449383a5_prof);

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
