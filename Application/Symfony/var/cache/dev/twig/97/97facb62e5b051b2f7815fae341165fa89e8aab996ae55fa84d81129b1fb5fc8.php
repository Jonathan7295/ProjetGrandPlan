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
        $__internal_e10e755d61d27695e659cd000e33794c248fb39fe09fd7b823447f96e37385d9 = $this->env->getExtension("native_profiler");
        $__internal_e10e755d61d27695e659cd000e33794c248fb39fe09fd7b823447f96e37385d9->enter($__internal_e10e755d61d27695e659cd000e33794c248fb39fe09fd7b823447f96e37385d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e10e755d61d27695e659cd000e33794c248fb39fe09fd7b823447f96e37385d9->leave($__internal_e10e755d61d27695e659cd000e33794c248fb39fe09fd7b823447f96e37385d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9fa2e21f4ea114c780e9450c149eaccf1646eb88de2f3b9b393eaaaf620e18f = $this->env->getExtension("native_profiler");
        $__internal_a9fa2e21f4ea114c780e9450c149eaccf1646eb88de2f3b9b393eaaaf620e18f->enter($__internal_a9fa2e21f4ea114c780e9450c149eaccf1646eb88de2f3b9b393eaaaf620e18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a9fa2e21f4ea114c780e9450c149eaccf1646eb88de2f3b9b393eaaaf620e18f->leave($__internal_a9fa2e21f4ea114c780e9450c149eaccf1646eb88de2f3b9b393eaaaf620e18f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90716176bce22763db40f3696ce6765318a8de1f3fbf875315a2141d4c91bb5 = $this->env->getExtension("native_profiler");
        $__internal_e90716176bce22763db40f3696ce6765318a8de1f3fbf875315a2141d4c91bb5->enter($__internal_e90716176bce22763db40f3696ce6765318a8de1f3fbf875315a2141d4c91bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e90716176bce22763db40f3696ce6765318a8de1f3fbf875315a2141d4c91bb5->leave($__internal_e90716176bce22763db40f3696ce6765318a8de1f3fbf875315a2141d4c91bb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b45c77aba53b821f3c8079edfe12869a4d59a33d2e1fabf79d2ac307d146aef = $this->env->getExtension("native_profiler");
        $__internal_4b45c77aba53b821f3c8079edfe12869a4d59a33d2e1fabf79d2ac307d146aef->enter($__internal_4b45c77aba53b821f3c8079edfe12869a4d59a33d2e1fabf79d2ac307d146aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b45c77aba53b821f3c8079edfe12869a4d59a33d2e1fabf79d2ac307d146aef->leave($__internal_4b45c77aba53b821f3c8079edfe12869a4d59a33d2e1fabf79d2ac307d146aef_prof);

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
