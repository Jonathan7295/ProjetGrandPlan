<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_611623c53d1fa91cbbb22b7cb1e0ca021064a976942358093f2681e8287a9467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_81fc50981cffddab0f9fa176b0a958758583fcbcf287a0988e98e9e0175e7804 = $this->env->getExtension("native_profiler");
        $__internal_81fc50981cffddab0f9fa176b0a958758583fcbcf287a0988e98e9e0175e7804->enter($__internal_81fc50981cffddab0f9fa176b0a958758583fcbcf287a0988e98e9e0175e7804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fc50981cffddab0f9fa176b0a958758583fcbcf287a0988e98e9e0175e7804->leave($__internal_81fc50981cffddab0f9fa176b0a958758583fcbcf287a0988e98e9e0175e7804_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e9ec74b437b5552c0d7f81d5e346c81304f8f126790cf3bcb2860b6a610e2fb = $this->env->getExtension("native_profiler");
        $__internal_4e9ec74b437b5552c0d7f81d5e346c81304f8f126790cf3bcb2860b6a610e2fb->enter($__internal_4e9ec74b437b5552c0d7f81d5e346c81304f8f126790cf3bcb2860b6a610e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e9ec74b437b5552c0d7f81d5e346c81304f8f126790cf3bcb2860b6a610e2fb->leave($__internal_4e9ec74b437b5552c0d7f81d5e346c81304f8f126790cf3bcb2860b6a610e2fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b379ec6d9699410c1dd04a583389e9958b7a3087c131eed422c0da36d7f5647 = $this->env->getExtension("native_profiler");
        $__internal_4b379ec6d9699410c1dd04a583389e9958b7a3087c131eed422c0da36d7f5647->enter($__internal_4b379ec6d9699410c1dd04a583389e9958b7a3087c131eed422c0da36d7f5647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b379ec6d9699410c1dd04a583389e9958b7a3087c131eed422c0da36d7f5647->leave($__internal_4b379ec6d9699410c1dd04a583389e9958b7a3087c131eed422c0da36d7f5647_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bfc72add8ad422ea18b0d190bafbbb800b5fd33efa33e76af7eed83060997c0 = $this->env->getExtension("native_profiler");
        $__internal_1bfc72add8ad422ea18b0d190bafbbb800b5fd33efa33e76af7eed83060997c0->enter($__internal_1bfc72add8ad422ea18b0d190bafbbb800b5fd33efa33e76af7eed83060997c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1bfc72add8ad422ea18b0d190bafbbb800b5fd33efa33e76af7eed83060997c0->leave($__internal_1bfc72add8ad422ea18b0d190bafbbb800b5fd33efa33e76af7eed83060997c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
