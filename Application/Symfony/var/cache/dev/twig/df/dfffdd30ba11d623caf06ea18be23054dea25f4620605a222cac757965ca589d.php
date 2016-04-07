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
        $__internal_00bd8096b4537927a4a7a894ab2d5fd38159a3e8c5c51554416690f7b02d9038 = $this->env->getExtension("native_profiler");
        $__internal_00bd8096b4537927a4a7a894ab2d5fd38159a3e8c5c51554416690f7b02d9038->enter($__internal_00bd8096b4537927a4a7a894ab2d5fd38159a3e8c5c51554416690f7b02d9038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00bd8096b4537927a4a7a894ab2d5fd38159a3e8c5c51554416690f7b02d9038->leave($__internal_00bd8096b4537927a4a7a894ab2d5fd38159a3e8c5c51554416690f7b02d9038_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bec6de66346c5074b4a96d947ebbc6e337f3f2a6ce26f88ed545a88283a197be = $this->env->getExtension("native_profiler");
        $__internal_bec6de66346c5074b4a96d947ebbc6e337f3f2a6ce26f88ed545a88283a197be->enter($__internal_bec6de66346c5074b4a96d947ebbc6e337f3f2a6ce26f88ed545a88283a197be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bec6de66346c5074b4a96d947ebbc6e337f3f2a6ce26f88ed545a88283a197be->leave($__internal_bec6de66346c5074b4a96d947ebbc6e337f3f2a6ce26f88ed545a88283a197be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92da14a41ac263cc6dfa55d2798379c339f27ff463760076399ac2f40918c8ad = $this->env->getExtension("native_profiler");
        $__internal_92da14a41ac263cc6dfa55d2798379c339f27ff463760076399ac2f40918c8ad->enter($__internal_92da14a41ac263cc6dfa55d2798379c339f27ff463760076399ac2f40918c8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92da14a41ac263cc6dfa55d2798379c339f27ff463760076399ac2f40918c8ad->leave($__internal_92da14a41ac263cc6dfa55d2798379c339f27ff463760076399ac2f40918c8ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad28a74e3e0a7c4cd865547bfa9c679a39fe04a38b625b670084426ed54b30d7 = $this->env->getExtension("native_profiler");
        $__internal_ad28a74e3e0a7c4cd865547bfa9c679a39fe04a38b625b670084426ed54b30d7->enter($__internal_ad28a74e3e0a7c4cd865547bfa9c679a39fe04a38b625b670084426ed54b30d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ad28a74e3e0a7c4cd865547bfa9c679a39fe04a38b625b670084426ed54b30d7->leave($__internal_ad28a74e3e0a7c4cd865547bfa9c679a39fe04a38b625b670084426ed54b30d7_prof);

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
