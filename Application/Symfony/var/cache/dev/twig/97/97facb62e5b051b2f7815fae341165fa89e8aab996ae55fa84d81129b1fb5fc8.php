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
        $__internal_41eaf5efbcd95259ea4310c286e6752cb6eab790cce82419df902f57f844a313 = $this->env->getExtension("native_profiler");
        $__internal_41eaf5efbcd95259ea4310c286e6752cb6eab790cce82419df902f57f844a313->enter($__internal_41eaf5efbcd95259ea4310c286e6752cb6eab790cce82419df902f57f844a313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41eaf5efbcd95259ea4310c286e6752cb6eab790cce82419df902f57f844a313->leave($__internal_41eaf5efbcd95259ea4310c286e6752cb6eab790cce82419df902f57f844a313_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9617280c626f7bf82613dd1659b15dba0486c4b60431a451bc1079b776cc7a31 = $this->env->getExtension("native_profiler");
        $__internal_9617280c626f7bf82613dd1659b15dba0486c4b60431a451bc1079b776cc7a31->enter($__internal_9617280c626f7bf82613dd1659b15dba0486c4b60431a451bc1079b776cc7a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9617280c626f7bf82613dd1659b15dba0486c4b60431a451bc1079b776cc7a31->leave($__internal_9617280c626f7bf82613dd1659b15dba0486c4b60431a451bc1079b776cc7a31_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2fd0da69de3ce7edcb7e3a7b9d6d538ef265542c1e82ca7e2b7eecbf19c191c = $this->env->getExtension("native_profiler");
        $__internal_c2fd0da69de3ce7edcb7e3a7b9d6d538ef265542c1e82ca7e2b7eecbf19c191c->enter($__internal_c2fd0da69de3ce7edcb7e3a7b9d6d538ef265542c1e82ca7e2b7eecbf19c191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2fd0da69de3ce7edcb7e3a7b9d6d538ef265542c1e82ca7e2b7eecbf19c191c->leave($__internal_c2fd0da69de3ce7edcb7e3a7b9d6d538ef265542c1e82ca7e2b7eecbf19c191c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e83356987e1d026e6bc9a6ee84ae6dbb22c7972aab4c71adbab7a5ee8c72e41d = $this->env->getExtension("native_profiler");
        $__internal_e83356987e1d026e6bc9a6ee84ae6dbb22c7972aab4c71adbab7a5ee8c72e41d->enter($__internal_e83356987e1d026e6bc9a6ee84ae6dbb22c7972aab4c71adbab7a5ee8c72e41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e83356987e1d026e6bc9a6ee84ae6dbb22c7972aab4c71adbab7a5ee8c72e41d->leave($__internal_e83356987e1d026e6bc9a6ee84ae6dbb22c7972aab4c71adbab7a5ee8c72e41d_prof);

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
