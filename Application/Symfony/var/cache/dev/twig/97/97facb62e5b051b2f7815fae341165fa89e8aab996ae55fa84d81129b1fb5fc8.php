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
        $__internal_14673bc9d12070bf7f1d235a8a93428b078a14144fc4eab52929516a2cf62e8a = $this->env->getExtension("native_profiler");
        $__internal_14673bc9d12070bf7f1d235a8a93428b078a14144fc4eab52929516a2cf62e8a->enter($__internal_14673bc9d12070bf7f1d235a8a93428b078a14144fc4eab52929516a2cf62e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14673bc9d12070bf7f1d235a8a93428b078a14144fc4eab52929516a2cf62e8a->leave($__internal_14673bc9d12070bf7f1d235a8a93428b078a14144fc4eab52929516a2cf62e8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e7e490b80a9a9546785e77a7ed1ab5d26a780f4d4daa4819f136ef734b061bf = $this->env->getExtension("native_profiler");
        $__internal_1e7e490b80a9a9546785e77a7ed1ab5d26a780f4d4daa4819f136ef734b061bf->enter($__internal_1e7e490b80a9a9546785e77a7ed1ab5d26a780f4d4daa4819f136ef734b061bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e7e490b80a9a9546785e77a7ed1ab5d26a780f4d4daa4819f136ef734b061bf->leave($__internal_1e7e490b80a9a9546785e77a7ed1ab5d26a780f4d4daa4819f136ef734b061bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ec0d64dd39952b948d7d6ecf5ad896bd6a77af0fd6e5c2d922056fa2818e2a = $this->env->getExtension("native_profiler");
        $__internal_a3ec0d64dd39952b948d7d6ecf5ad896bd6a77af0fd6e5c2d922056fa2818e2a->enter($__internal_a3ec0d64dd39952b948d7d6ecf5ad896bd6a77af0fd6e5c2d922056fa2818e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3ec0d64dd39952b948d7d6ecf5ad896bd6a77af0fd6e5c2d922056fa2818e2a->leave($__internal_a3ec0d64dd39952b948d7d6ecf5ad896bd6a77af0fd6e5c2d922056fa2818e2a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de727421779e7ac8e6e60b7f63b8aaea4849ff59d9b74100d2bfa7d2d88204de = $this->env->getExtension("native_profiler");
        $__internal_de727421779e7ac8e6e60b7f63b8aaea4849ff59d9b74100d2bfa7d2d88204de->enter($__internal_de727421779e7ac8e6e60b7f63b8aaea4849ff59d9b74100d2bfa7d2d88204de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de727421779e7ac8e6e60b7f63b8aaea4849ff59d9b74100d2bfa7d2d88204de->leave($__internal_de727421779e7ac8e6e60b7f63b8aaea4849ff59d9b74100d2bfa7d2d88204de_prof);

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