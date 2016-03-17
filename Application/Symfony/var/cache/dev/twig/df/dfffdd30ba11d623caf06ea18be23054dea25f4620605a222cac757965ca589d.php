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
        $__internal_ea642f5d1fa754ad2f16d64cd67bcb6190b617a6761ee8245ba78926699850a0 = $this->env->getExtension("native_profiler");
        $__internal_ea642f5d1fa754ad2f16d64cd67bcb6190b617a6761ee8245ba78926699850a0->enter($__internal_ea642f5d1fa754ad2f16d64cd67bcb6190b617a6761ee8245ba78926699850a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea642f5d1fa754ad2f16d64cd67bcb6190b617a6761ee8245ba78926699850a0->leave($__internal_ea642f5d1fa754ad2f16d64cd67bcb6190b617a6761ee8245ba78926699850a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e3bf2bb47492ba964c75624241a1f97fdd782e8247bed93d28a0ab15152c938 = $this->env->getExtension("native_profiler");
        $__internal_1e3bf2bb47492ba964c75624241a1f97fdd782e8247bed93d28a0ab15152c938->enter($__internal_1e3bf2bb47492ba964c75624241a1f97fdd782e8247bed93d28a0ab15152c938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e3bf2bb47492ba964c75624241a1f97fdd782e8247bed93d28a0ab15152c938->leave($__internal_1e3bf2bb47492ba964c75624241a1f97fdd782e8247bed93d28a0ab15152c938_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25d4390c53f5115edc89a4c7793f5c92de9ccd86df996a2a67bbe1f1b6f2284c = $this->env->getExtension("native_profiler");
        $__internal_25d4390c53f5115edc89a4c7793f5c92de9ccd86df996a2a67bbe1f1b6f2284c->enter($__internal_25d4390c53f5115edc89a4c7793f5c92de9ccd86df996a2a67bbe1f1b6f2284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25d4390c53f5115edc89a4c7793f5c92de9ccd86df996a2a67bbe1f1b6f2284c->leave($__internal_25d4390c53f5115edc89a4c7793f5c92de9ccd86df996a2a67bbe1f1b6f2284c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_beaec69b960109306bc35bfb74c071ab5b2fe86b3e0f238431e142477a50ffc6 = $this->env->getExtension("native_profiler");
        $__internal_beaec69b960109306bc35bfb74c071ab5b2fe86b3e0f238431e142477a50ffc6->enter($__internal_beaec69b960109306bc35bfb74c071ab5b2fe86b3e0f238431e142477a50ffc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_beaec69b960109306bc35bfb74c071ab5b2fe86b3e0f238431e142477a50ffc6->leave($__internal_beaec69b960109306bc35bfb74c071ab5b2fe86b3e0f238431e142477a50ffc6_prof);

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
