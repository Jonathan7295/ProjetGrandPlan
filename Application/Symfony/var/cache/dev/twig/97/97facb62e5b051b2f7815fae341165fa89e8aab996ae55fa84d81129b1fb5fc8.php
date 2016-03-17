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
        $__internal_aa03c04dc584d79d80e0f2475d4ffaa9139b2e71e351e838db15ed5d17f7194d = $this->env->getExtension("native_profiler");
        $__internal_aa03c04dc584d79d80e0f2475d4ffaa9139b2e71e351e838db15ed5d17f7194d->enter($__internal_aa03c04dc584d79d80e0f2475d4ffaa9139b2e71e351e838db15ed5d17f7194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa03c04dc584d79d80e0f2475d4ffaa9139b2e71e351e838db15ed5d17f7194d->leave($__internal_aa03c04dc584d79d80e0f2475d4ffaa9139b2e71e351e838db15ed5d17f7194d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_326ae576aa15fb8806ec07f20b5cb2f99a7071c450cd99af6852105dd211aeb4 = $this->env->getExtension("native_profiler");
        $__internal_326ae576aa15fb8806ec07f20b5cb2f99a7071c450cd99af6852105dd211aeb4->enter($__internal_326ae576aa15fb8806ec07f20b5cb2f99a7071c450cd99af6852105dd211aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_326ae576aa15fb8806ec07f20b5cb2f99a7071c450cd99af6852105dd211aeb4->leave($__internal_326ae576aa15fb8806ec07f20b5cb2f99a7071c450cd99af6852105dd211aeb4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_243fc052673b8cdd6a640a04f28089178a4cd1849ce0c821ee0c4801f72af3d8 = $this->env->getExtension("native_profiler");
        $__internal_243fc052673b8cdd6a640a04f28089178a4cd1849ce0c821ee0c4801f72af3d8->enter($__internal_243fc052673b8cdd6a640a04f28089178a4cd1849ce0c821ee0c4801f72af3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_243fc052673b8cdd6a640a04f28089178a4cd1849ce0c821ee0c4801f72af3d8->leave($__internal_243fc052673b8cdd6a640a04f28089178a4cd1849ce0c821ee0c4801f72af3d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_730bf0e46158c3d55d8f548ea71b985d7f4bae8997cf4db4f9c8bca6b922b443 = $this->env->getExtension("native_profiler");
        $__internal_730bf0e46158c3d55d8f548ea71b985d7f4bae8997cf4db4f9c8bca6b922b443->enter($__internal_730bf0e46158c3d55d8f548ea71b985d7f4bae8997cf4db4f9c8bca6b922b443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_730bf0e46158c3d55d8f548ea71b985d7f4bae8997cf4db4f9c8bca6b922b443->leave($__internal_730bf0e46158c3d55d8f548ea71b985d7f4bae8997cf4db4f9c8bca6b922b443_prof);

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
