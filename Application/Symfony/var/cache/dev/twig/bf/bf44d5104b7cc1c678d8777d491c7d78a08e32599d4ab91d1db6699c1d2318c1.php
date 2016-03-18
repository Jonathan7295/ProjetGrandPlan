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
        $__internal_3642b160d0e2af46aafd6e28cd1fda8bf1766ee26a3bada0e1e5db485e2207e1 = $this->env->getExtension("native_profiler");
        $__internal_3642b160d0e2af46aafd6e28cd1fda8bf1766ee26a3bada0e1e5db485e2207e1->enter($__internal_3642b160d0e2af46aafd6e28cd1fda8bf1766ee26a3bada0e1e5db485e2207e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3642b160d0e2af46aafd6e28cd1fda8bf1766ee26a3bada0e1e5db485e2207e1->leave($__internal_3642b160d0e2af46aafd6e28cd1fda8bf1766ee26a3bada0e1e5db485e2207e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3898696cd7b517c970acfaecbfdd61e09865a570ac94989d4fcda286d9d723b = $this->env->getExtension("native_profiler");
        $__internal_b3898696cd7b517c970acfaecbfdd61e09865a570ac94989d4fcda286d9d723b->enter($__internal_b3898696cd7b517c970acfaecbfdd61e09865a570ac94989d4fcda286d9d723b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3898696cd7b517c970acfaecbfdd61e09865a570ac94989d4fcda286d9d723b->leave($__internal_b3898696cd7b517c970acfaecbfdd61e09865a570ac94989d4fcda286d9d723b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd367df38cd69d3462b8451b15361cb2fe8a375bb7d12f5cff6670b877df4aa7 = $this->env->getExtension("native_profiler");
        $__internal_fd367df38cd69d3462b8451b15361cb2fe8a375bb7d12f5cff6670b877df4aa7->enter($__internal_fd367df38cd69d3462b8451b15361cb2fe8a375bb7d12f5cff6670b877df4aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd367df38cd69d3462b8451b15361cb2fe8a375bb7d12f5cff6670b877df4aa7->leave($__internal_fd367df38cd69d3462b8451b15361cb2fe8a375bb7d12f5cff6670b877df4aa7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3dde019dc6c07128c0b4ec2f4cec5cfd14106282bcaa7686b5de5dabd03b7b = $this->env->getExtension("native_profiler");
        $__internal_da3dde019dc6c07128c0b4ec2f4cec5cfd14106282bcaa7686b5de5dabd03b7b->enter($__internal_da3dde019dc6c07128c0b4ec2f4cec5cfd14106282bcaa7686b5de5dabd03b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da3dde019dc6c07128c0b4ec2f4cec5cfd14106282bcaa7686b5de5dabd03b7b->leave($__internal_da3dde019dc6c07128c0b4ec2f4cec5cfd14106282bcaa7686b5de5dabd03b7b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1fb7f04d73d8872590c806815734712f6c6080aa1bd7d30df8dc1c5900f2512f = $this->env->getExtension("native_profiler");
        $__internal_1fb7f04d73d8872590c806815734712f6c6080aa1bd7d30df8dc1c5900f2512f->enter($__internal_1fb7f04d73d8872590c806815734712f6c6080aa1bd7d30df8dc1c5900f2512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1fb7f04d73d8872590c806815734712f6c6080aa1bd7d30df8dc1c5900f2512f->leave($__internal_1fb7f04d73d8872590c806815734712f6c6080aa1bd7d30df8dc1c5900f2512f_prof);

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
