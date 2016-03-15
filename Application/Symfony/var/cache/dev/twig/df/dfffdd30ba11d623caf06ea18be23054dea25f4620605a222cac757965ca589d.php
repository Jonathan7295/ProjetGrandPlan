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
        $__internal_725b8262737bc18dc9cbecc444c70c6e6de058529baec2d7269984452bec3d14 = $this->env->getExtension("native_profiler");
        $__internal_725b8262737bc18dc9cbecc444c70c6e6de058529baec2d7269984452bec3d14->enter($__internal_725b8262737bc18dc9cbecc444c70c6e6de058529baec2d7269984452bec3d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725b8262737bc18dc9cbecc444c70c6e6de058529baec2d7269984452bec3d14->leave($__internal_725b8262737bc18dc9cbecc444c70c6e6de058529baec2d7269984452bec3d14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92764a577f86265a61f02c4c20e75347781be0040b93cb0650356a9a332ef38a = $this->env->getExtension("native_profiler");
        $__internal_92764a577f86265a61f02c4c20e75347781be0040b93cb0650356a9a332ef38a->enter($__internal_92764a577f86265a61f02c4c20e75347781be0040b93cb0650356a9a332ef38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_92764a577f86265a61f02c4c20e75347781be0040b93cb0650356a9a332ef38a->leave($__internal_92764a577f86265a61f02c4c20e75347781be0040b93cb0650356a9a332ef38a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ff62f7f5e4a732258cb19962cfa57fc04d9cc7bbb43859341ad73b8b197de2 = $this->env->getExtension("native_profiler");
        $__internal_c5ff62f7f5e4a732258cb19962cfa57fc04d9cc7bbb43859341ad73b8b197de2->enter($__internal_c5ff62f7f5e4a732258cb19962cfa57fc04d9cc7bbb43859341ad73b8b197de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5ff62f7f5e4a732258cb19962cfa57fc04d9cc7bbb43859341ad73b8b197de2->leave($__internal_c5ff62f7f5e4a732258cb19962cfa57fc04d9cc7bbb43859341ad73b8b197de2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b827c1c469df72b5dd9bdf3e18255cf3cb6fb9bf005ba2962a78e342dc3c6704 = $this->env->getExtension("native_profiler");
        $__internal_b827c1c469df72b5dd9bdf3e18255cf3cb6fb9bf005ba2962a78e342dc3c6704->enter($__internal_b827c1c469df72b5dd9bdf3e18255cf3cb6fb9bf005ba2962a78e342dc3c6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b827c1c469df72b5dd9bdf3e18255cf3cb6fb9bf005ba2962a78e342dc3c6704->leave($__internal_b827c1c469df72b5dd9bdf3e18255cf3cb6fb9bf005ba2962a78e342dc3c6704_prof);

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
