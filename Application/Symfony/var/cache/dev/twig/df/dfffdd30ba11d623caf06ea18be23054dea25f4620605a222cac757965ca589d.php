<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b6c8d57ef0d4cdcbe3fd4f39d38aae1541bb42b4f81227626a6ef6dfcbc44ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_cb6bcee56c2086ecff1ef670fc65630bfec4bb4f3e31f564144d89aded050cbf = $this->env->getExtension("native_profiler");
        $__internal_cb6bcee56c2086ecff1ef670fc65630bfec4bb4f3e31f564144d89aded050cbf->enter($__internal_cb6bcee56c2086ecff1ef670fc65630bfec4bb4f3e31f564144d89aded050cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6bcee56c2086ecff1ef670fc65630bfec4bb4f3e31f564144d89aded050cbf->leave($__internal_cb6bcee56c2086ecff1ef670fc65630bfec4bb4f3e31f564144d89aded050cbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_077c0031295dde37ddf7bc54cf41fd1d9c281ad8681a8b39ec14bfa357b10190 = $this->env->getExtension("native_profiler");
        $__internal_077c0031295dde37ddf7bc54cf41fd1d9c281ad8681a8b39ec14bfa357b10190->enter($__internal_077c0031295dde37ddf7bc54cf41fd1d9c281ad8681a8b39ec14bfa357b10190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_077c0031295dde37ddf7bc54cf41fd1d9c281ad8681a8b39ec14bfa357b10190->leave($__internal_077c0031295dde37ddf7bc54cf41fd1d9c281ad8681a8b39ec14bfa357b10190_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_951cad5c866294a43d848997b87b82a514a2f9c26d762ba25808d822918968e2 = $this->env->getExtension("native_profiler");
        $__internal_951cad5c866294a43d848997b87b82a514a2f9c26d762ba25808d822918968e2->enter($__internal_951cad5c866294a43d848997b87b82a514a2f9c26d762ba25808d822918968e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_951cad5c866294a43d848997b87b82a514a2f9c26d762ba25808d822918968e2->leave($__internal_951cad5c866294a43d848997b87b82a514a2f9c26d762ba25808d822918968e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3997ccdc9c28ff470248dac25fe2e08843980cd29e62c298bc767b67dd8b296a = $this->env->getExtension("native_profiler");
        $__internal_3997ccdc9c28ff470248dac25fe2e08843980cd29e62c298bc767b67dd8b296a->enter($__internal_3997ccdc9c28ff470248dac25fe2e08843980cd29e62c298bc767b67dd8b296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3997ccdc9c28ff470248dac25fe2e08843980cd29e62c298bc767b67dd8b296a->leave($__internal_3997ccdc9c28ff470248dac25fe2e08843980cd29e62c298bc767b67dd8b296a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
