<?php

/* base.html.twig */
class __TwigTemplate_551cf9e067eb7023366192357609329c705d79651289d47635a3838728a42e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73f0f4f50d8024c03835d92297a6b72e78bce8d74d8688f1a7f932bf4ef90312 = $this->env->getExtension("native_profiler");
        $__internal_73f0f4f50d8024c03835d92297a6b72e78bce8d74d8688f1a7f932bf4ef90312->enter($__internal_73f0f4f50d8024c03835d92297a6b72e78bce8d74d8688f1a7f932bf4ef90312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_73f0f4f50d8024c03835d92297a6b72e78bce8d74d8688f1a7f932bf4ef90312->leave($__internal_73f0f4f50d8024c03835d92297a6b72e78bce8d74d8688f1a7f932bf4ef90312_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_416511a0395441423eb197e996e2084287dddbb89b7d4aeb444ca9e56f90a1d0 = $this->env->getExtension("native_profiler");
        $__internal_416511a0395441423eb197e996e2084287dddbb89b7d4aeb444ca9e56f90a1d0->enter($__internal_416511a0395441423eb197e996e2084287dddbb89b7d4aeb444ca9e56f90a1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_416511a0395441423eb197e996e2084287dddbb89b7d4aeb444ca9e56f90a1d0->leave($__internal_416511a0395441423eb197e996e2084287dddbb89b7d4aeb444ca9e56f90a1d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92c26d2f5f782a7441faf08565ebd375d24ab2181b77cf7609523c81d9cce740 = $this->env->getExtension("native_profiler");
        $__internal_92c26d2f5f782a7441faf08565ebd375d24ab2181b77cf7609523c81d9cce740->enter($__internal_92c26d2f5f782a7441faf08565ebd375d24ab2181b77cf7609523c81d9cce740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92c26d2f5f782a7441faf08565ebd375d24ab2181b77cf7609523c81d9cce740->leave($__internal_92c26d2f5f782a7441faf08565ebd375d24ab2181b77cf7609523c81d9cce740_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaad38fbbf237388c820dd0536d535125a125569f1f291edd8659150ae7f169f = $this->env->getExtension("native_profiler");
        $__internal_aaad38fbbf237388c820dd0536d535125a125569f1f291edd8659150ae7f169f->enter($__internal_aaad38fbbf237388c820dd0536d535125a125569f1f291edd8659150ae7f169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaad38fbbf237388c820dd0536d535125a125569f1f291edd8659150ae7f169f->leave($__internal_aaad38fbbf237388c820dd0536d535125a125569f1f291edd8659150ae7f169f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_274105f471ba3d75be1b329bdc877f141b1f377db1e3acfeb11d3e5fad75314b = $this->env->getExtension("native_profiler");
        $__internal_274105f471ba3d75be1b329bdc877f141b1f377db1e3acfeb11d3e5fad75314b->enter($__internal_274105f471ba3d75be1b329bdc877f141b1f377db1e3acfeb11d3e5fad75314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_274105f471ba3d75be1b329bdc877f141b1f377db1e3acfeb11d3e5fad75314b->leave($__internal_274105f471ba3d75be1b329bdc877f141b1f377db1e3acfeb11d3e5fad75314b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
