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
        $__internal_42cfa136d3bb47ffb96b6a68fd696956e7206448ac7b9353190c07dd822a38cc = $this->env->getExtension("native_profiler");
        $__internal_42cfa136d3bb47ffb96b6a68fd696956e7206448ac7b9353190c07dd822a38cc->enter($__internal_42cfa136d3bb47ffb96b6a68fd696956e7206448ac7b9353190c07dd822a38cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42cfa136d3bb47ffb96b6a68fd696956e7206448ac7b9353190c07dd822a38cc->leave($__internal_42cfa136d3bb47ffb96b6a68fd696956e7206448ac7b9353190c07dd822a38cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1559361297a52c2b9dba20a57bb14764cd1e252deae136c9e6a89b974f2b16e0 = $this->env->getExtension("native_profiler");
        $__internal_1559361297a52c2b9dba20a57bb14764cd1e252deae136c9e6a89b974f2b16e0->enter($__internal_1559361297a52c2b9dba20a57bb14764cd1e252deae136c9e6a89b974f2b16e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1559361297a52c2b9dba20a57bb14764cd1e252deae136c9e6a89b974f2b16e0->leave($__internal_1559361297a52c2b9dba20a57bb14764cd1e252deae136c9e6a89b974f2b16e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e91b0a85550693b16ac0f32e456008e5fa65ac0453d8efa9d79780bfb34dfd = $this->env->getExtension("native_profiler");
        $__internal_a7e91b0a85550693b16ac0f32e456008e5fa65ac0453d8efa9d79780bfb34dfd->enter($__internal_a7e91b0a85550693b16ac0f32e456008e5fa65ac0453d8efa9d79780bfb34dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7e91b0a85550693b16ac0f32e456008e5fa65ac0453d8efa9d79780bfb34dfd->leave($__internal_a7e91b0a85550693b16ac0f32e456008e5fa65ac0453d8efa9d79780bfb34dfd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2671bd91b409d20a1f97f54fa54951da353912cf157aa186d4ee617b645e82d = $this->env->getExtension("native_profiler");
        $__internal_c2671bd91b409d20a1f97f54fa54951da353912cf157aa186d4ee617b645e82d->enter($__internal_c2671bd91b409d20a1f97f54fa54951da353912cf157aa186d4ee617b645e82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c2671bd91b409d20a1f97f54fa54951da353912cf157aa186d4ee617b645e82d->leave($__internal_c2671bd91b409d20a1f97f54fa54951da353912cf157aa186d4ee617b645e82d_prof);

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
