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
        $__internal_e90716bf2dea26b3320a0660f89348e4eb2688f83413890bce60987609f1a017 = $this->env->getExtension("native_profiler");
        $__internal_e90716bf2dea26b3320a0660f89348e4eb2688f83413890bce60987609f1a017->enter($__internal_e90716bf2dea26b3320a0660f89348e4eb2688f83413890bce60987609f1a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90716bf2dea26b3320a0660f89348e4eb2688f83413890bce60987609f1a017->leave($__internal_e90716bf2dea26b3320a0660f89348e4eb2688f83413890bce60987609f1a017_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_119f793543fb331c650705134d907dcd0e44ade94891172b9e863d7b75b281d8 = $this->env->getExtension("native_profiler");
        $__internal_119f793543fb331c650705134d907dcd0e44ade94891172b9e863d7b75b281d8->enter($__internal_119f793543fb331c650705134d907dcd0e44ade94891172b9e863d7b75b281d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_119f793543fb331c650705134d907dcd0e44ade94891172b9e863d7b75b281d8->leave($__internal_119f793543fb331c650705134d907dcd0e44ade94891172b9e863d7b75b281d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3979caa6b3645e210d116bff40427cde1ea6da5ce1db3006b457c42966bd742 = $this->env->getExtension("native_profiler");
        $__internal_b3979caa6b3645e210d116bff40427cde1ea6da5ce1db3006b457c42966bd742->enter($__internal_b3979caa6b3645e210d116bff40427cde1ea6da5ce1db3006b457c42966bd742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3979caa6b3645e210d116bff40427cde1ea6da5ce1db3006b457c42966bd742->leave($__internal_b3979caa6b3645e210d116bff40427cde1ea6da5ce1db3006b457c42966bd742_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f47dfa501aae580a4aa82938f20cad24004706e37d48638f617e79b1764461 = $this->env->getExtension("native_profiler");
        $__internal_54f47dfa501aae580a4aa82938f20cad24004706e37d48638f617e79b1764461->enter($__internal_54f47dfa501aae580a4aa82938f20cad24004706e37d48638f617e79b1764461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_54f47dfa501aae580a4aa82938f20cad24004706e37d48638f617e79b1764461->leave($__internal_54f47dfa501aae580a4aa82938f20cad24004706e37d48638f617e79b1764461_prof);

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
