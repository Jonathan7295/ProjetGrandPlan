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
        $__internal_0990a946db6a8b8a114d30572a54eddfc79edac3b45f4efc59f6b78dbd1af21d = $this->env->getExtension("native_profiler");
        $__internal_0990a946db6a8b8a114d30572a54eddfc79edac3b45f4efc59f6b78dbd1af21d->enter($__internal_0990a946db6a8b8a114d30572a54eddfc79edac3b45f4efc59f6b78dbd1af21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0990a946db6a8b8a114d30572a54eddfc79edac3b45f4efc59f6b78dbd1af21d->leave($__internal_0990a946db6a8b8a114d30572a54eddfc79edac3b45f4efc59f6b78dbd1af21d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4d7caa7da1e15dda7c123043bd173bde8a214e367dff69897958a9eacbff25e = $this->env->getExtension("native_profiler");
        $__internal_f4d7caa7da1e15dda7c123043bd173bde8a214e367dff69897958a9eacbff25e->enter($__internal_f4d7caa7da1e15dda7c123043bd173bde8a214e367dff69897958a9eacbff25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4d7caa7da1e15dda7c123043bd173bde8a214e367dff69897958a9eacbff25e->leave($__internal_f4d7caa7da1e15dda7c123043bd173bde8a214e367dff69897958a9eacbff25e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a34bf27311adf412506dbe068cf02b8d77a8a27b55547cd4be23b3d8fd8cacd9 = $this->env->getExtension("native_profiler");
        $__internal_a34bf27311adf412506dbe068cf02b8d77a8a27b55547cd4be23b3d8fd8cacd9->enter($__internal_a34bf27311adf412506dbe068cf02b8d77a8a27b55547cd4be23b3d8fd8cacd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a34bf27311adf412506dbe068cf02b8d77a8a27b55547cd4be23b3d8fd8cacd9->leave($__internal_a34bf27311adf412506dbe068cf02b8d77a8a27b55547cd4be23b3d8fd8cacd9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c819c135fbf16913908c9283025a448221bb47b773bdf252be2527c1af945c7 = $this->env->getExtension("native_profiler");
        $__internal_6c819c135fbf16913908c9283025a448221bb47b773bdf252be2527c1af945c7->enter($__internal_6c819c135fbf16913908c9283025a448221bb47b773bdf252be2527c1af945c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6c819c135fbf16913908c9283025a448221bb47b773bdf252be2527c1af945c7->leave($__internal_6c819c135fbf16913908c9283025a448221bb47b773bdf252be2527c1af945c7_prof);

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
