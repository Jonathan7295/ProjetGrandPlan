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
        $__internal_132724a3eee6ba618b6c1403411a6fee5a55c6bb92c3b69bbf9822e3c23f3016 = $this->env->getExtension("native_profiler");
        $__internal_132724a3eee6ba618b6c1403411a6fee5a55c6bb92c3b69bbf9822e3c23f3016->enter($__internal_132724a3eee6ba618b6c1403411a6fee5a55c6bb92c3b69bbf9822e3c23f3016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132724a3eee6ba618b6c1403411a6fee5a55c6bb92c3b69bbf9822e3c23f3016->leave($__internal_132724a3eee6ba618b6c1403411a6fee5a55c6bb92c3b69bbf9822e3c23f3016_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f68a72933a5caecdb525f1d99d8f7152adbbd3ff268d445a933b086a4a9d736b = $this->env->getExtension("native_profiler");
        $__internal_f68a72933a5caecdb525f1d99d8f7152adbbd3ff268d445a933b086a4a9d736b->enter($__internal_f68a72933a5caecdb525f1d99d8f7152adbbd3ff268d445a933b086a4a9d736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f68a72933a5caecdb525f1d99d8f7152adbbd3ff268d445a933b086a4a9d736b->leave($__internal_f68a72933a5caecdb525f1d99d8f7152adbbd3ff268d445a933b086a4a9d736b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_126e113b161fb9292add5019be91937f968d42d3ffe6cc72446a21c040160af2 = $this->env->getExtension("native_profiler");
        $__internal_126e113b161fb9292add5019be91937f968d42d3ffe6cc72446a21c040160af2->enter($__internal_126e113b161fb9292add5019be91937f968d42d3ffe6cc72446a21c040160af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_126e113b161fb9292add5019be91937f968d42d3ffe6cc72446a21c040160af2->leave($__internal_126e113b161fb9292add5019be91937f968d42d3ffe6cc72446a21c040160af2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a973f4a80335cffe885a9e12b0f3d9e86018817d271d4757f2b9cf797652a224 = $this->env->getExtension("native_profiler");
        $__internal_a973f4a80335cffe885a9e12b0f3d9e86018817d271d4757f2b9cf797652a224->enter($__internal_a973f4a80335cffe885a9e12b0f3d9e86018817d271d4757f2b9cf797652a224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a973f4a80335cffe885a9e12b0f3d9e86018817d271d4757f2b9cf797652a224->leave($__internal_a973f4a80335cffe885a9e12b0f3d9e86018817d271d4757f2b9cf797652a224_prof);

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
