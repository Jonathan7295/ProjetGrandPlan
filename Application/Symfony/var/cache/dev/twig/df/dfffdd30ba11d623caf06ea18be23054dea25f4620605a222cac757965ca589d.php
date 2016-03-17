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
        $__internal_b22e5ee4d24522f22ebe9e748bd0b996c7c2a718dc5935e184f666f7acc70543 = $this->env->getExtension("native_profiler");
        $__internal_b22e5ee4d24522f22ebe9e748bd0b996c7c2a718dc5935e184f666f7acc70543->enter($__internal_b22e5ee4d24522f22ebe9e748bd0b996c7c2a718dc5935e184f666f7acc70543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22e5ee4d24522f22ebe9e748bd0b996c7c2a718dc5935e184f666f7acc70543->leave($__internal_b22e5ee4d24522f22ebe9e748bd0b996c7c2a718dc5935e184f666f7acc70543_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46eb14bc4c3f13b2d0dd1e5bb60edb188e9119e981c4b7cd475c5f28f15b74b0 = $this->env->getExtension("native_profiler");
        $__internal_46eb14bc4c3f13b2d0dd1e5bb60edb188e9119e981c4b7cd475c5f28f15b74b0->enter($__internal_46eb14bc4c3f13b2d0dd1e5bb60edb188e9119e981c4b7cd475c5f28f15b74b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46eb14bc4c3f13b2d0dd1e5bb60edb188e9119e981c4b7cd475c5f28f15b74b0->leave($__internal_46eb14bc4c3f13b2d0dd1e5bb60edb188e9119e981c4b7cd475c5f28f15b74b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5db5d429d22e712a21d38ae46ee02ffadae8cb2eafdabf29b3e11d6c092702a = $this->env->getExtension("native_profiler");
        $__internal_c5db5d429d22e712a21d38ae46ee02ffadae8cb2eafdabf29b3e11d6c092702a->enter($__internal_c5db5d429d22e712a21d38ae46ee02ffadae8cb2eafdabf29b3e11d6c092702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5db5d429d22e712a21d38ae46ee02ffadae8cb2eafdabf29b3e11d6c092702a->leave($__internal_c5db5d429d22e712a21d38ae46ee02ffadae8cb2eafdabf29b3e11d6c092702a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd6b7f7dec538207cbfb009b3bd102ad04d3b8b33adaa482847e920972cc3bc = $this->env->getExtension("native_profiler");
        $__internal_0bd6b7f7dec538207cbfb009b3bd102ad04d3b8b33adaa482847e920972cc3bc->enter($__internal_0bd6b7f7dec538207cbfb009b3bd102ad04d3b8b33adaa482847e920972cc3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0bd6b7f7dec538207cbfb009b3bd102ad04d3b8b33adaa482847e920972cc3bc->leave($__internal_0bd6b7f7dec538207cbfb009b3bd102ad04d3b8b33adaa482847e920972cc3bc_prof);

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
