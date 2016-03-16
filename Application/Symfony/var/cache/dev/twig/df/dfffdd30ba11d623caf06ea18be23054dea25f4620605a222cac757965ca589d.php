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
        $__internal_3d3da7e57efa48b7bed63bdd438b9e7f829849034b39c4bbb3d8897b4644e3b9 = $this->env->getExtension("native_profiler");
        $__internal_3d3da7e57efa48b7bed63bdd438b9e7f829849034b39c4bbb3d8897b4644e3b9->enter($__internal_3d3da7e57efa48b7bed63bdd438b9e7f829849034b39c4bbb3d8897b4644e3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3da7e57efa48b7bed63bdd438b9e7f829849034b39c4bbb3d8897b4644e3b9->leave($__internal_3d3da7e57efa48b7bed63bdd438b9e7f829849034b39c4bbb3d8897b4644e3b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8a75e550082b730241e4b49c8c6857c8676993bacbc45c90c348c96471f2ecb = $this->env->getExtension("native_profiler");
        $__internal_e8a75e550082b730241e4b49c8c6857c8676993bacbc45c90c348c96471f2ecb->enter($__internal_e8a75e550082b730241e4b49c8c6857c8676993bacbc45c90c348c96471f2ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e8a75e550082b730241e4b49c8c6857c8676993bacbc45c90c348c96471f2ecb->leave($__internal_e8a75e550082b730241e4b49c8c6857c8676993bacbc45c90c348c96471f2ecb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81357e86852ce259ade1a8036851ee9eb611ec54623c1dd3532cadffb5938449 = $this->env->getExtension("native_profiler");
        $__internal_81357e86852ce259ade1a8036851ee9eb611ec54623c1dd3532cadffb5938449->enter($__internal_81357e86852ce259ade1a8036851ee9eb611ec54623c1dd3532cadffb5938449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81357e86852ce259ade1a8036851ee9eb611ec54623c1dd3532cadffb5938449->leave($__internal_81357e86852ce259ade1a8036851ee9eb611ec54623c1dd3532cadffb5938449_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4e69b94ed519e28265e9cde9c68025c2707463d991949e5dbf2b2bc4832382b = $this->env->getExtension("native_profiler");
        $__internal_f4e69b94ed519e28265e9cde9c68025c2707463d991949e5dbf2b2bc4832382b->enter($__internal_f4e69b94ed519e28265e9cde9c68025c2707463d991949e5dbf2b2bc4832382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f4e69b94ed519e28265e9cde9c68025c2707463d991949e5dbf2b2bc4832382b->leave($__internal_f4e69b94ed519e28265e9cde9c68025c2707463d991949e5dbf2b2bc4832382b_prof);

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
