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
        $__internal_dc576fb73686f147e66c60cfed5fe3ab9547c4d046d8b388bbeb4942fb7bfd5c = $this->env->getExtension("native_profiler");
        $__internal_dc576fb73686f147e66c60cfed5fe3ab9547c4d046d8b388bbeb4942fb7bfd5c->enter($__internal_dc576fb73686f147e66c60cfed5fe3ab9547c4d046d8b388bbeb4942fb7bfd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc576fb73686f147e66c60cfed5fe3ab9547c4d046d8b388bbeb4942fb7bfd5c->leave($__internal_dc576fb73686f147e66c60cfed5fe3ab9547c4d046d8b388bbeb4942fb7bfd5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c88e88b0f87339f74e9e5fc1a9d96803c949f9d579c8ddeadee5d5c59c1cded8 = $this->env->getExtension("native_profiler");
        $__internal_c88e88b0f87339f74e9e5fc1a9d96803c949f9d579c8ddeadee5d5c59c1cded8->enter($__internal_c88e88b0f87339f74e9e5fc1a9d96803c949f9d579c8ddeadee5d5c59c1cded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c88e88b0f87339f74e9e5fc1a9d96803c949f9d579c8ddeadee5d5c59c1cded8->leave($__internal_c88e88b0f87339f74e9e5fc1a9d96803c949f9d579c8ddeadee5d5c59c1cded8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07606ac2163a832fd050d43d3cdbd0b774b791d2d6e25860894440096f3b6792 = $this->env->getExtension("native_profiler");
        $__internal_07606ac2163a832fd050d43d3cdbd0b774b791d2d6e25860894440096f3b6792->enter($__internal_07606ac2163a832fd050d43d3cdbd0b774b791d2d6e25860894440096f3b6792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07606ac2163a832fd050d43d3cdbd0b774b791d2d6e25860894440096f3b6792->leave($__internal_07606ac2163a832fd050d43d3cdbd0b774b791d2d6e25860894440096f3b6792_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1341e6930d32f52be5ee0f092503ce22bda3845c8d9081fcc2171c8d2b346774 = $this->env->getExtension("native_profiler");
        $__internal_1341e6930d32f52be5ee0f092503ce22bda3845c8d9081fcc2171c8d2b346774->enter($__internal_1341e6930d32f52be5ee0f092503ce22bda3845c8d9081fcc2171c8d2b346774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1341e6930d32f52be5ee0f092503ce22bda3845c8d9081fcc2171c8d2b346774->leave($__internal_1341e6930d32f52be5ee0f092503ce22bda3845c8d9081fcc2171c8d2b346774_prof);

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
