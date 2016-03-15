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
        $__internal_2c31769e2eb293754876bfe106cc4c17699c4689d2b28dfc1a8a3f27f5f61493 = $this->env->getExtension("native_profiler");
        $__internal_2c31769e2eb293754876bfe106cc4c17699c4689d2b28dfc1a8a3f27f5f61493->enter($__internal_2c31769e2eb293754876bfe106cc4c17699c4689d2b28dfc1a8a3f27f5f61493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2c31769e2eb293754876bfe106cc4c17699c4689d2b28dfc1a8a3f27f5f61493->leave($__internal_2c31769e2eb293754876bfe106cc4c17699c4689d2b28dfc1a8a3f27f5f61493_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5f89c09f5de9f222e1ae08ebd34b8c029149ecbec66b6da97d4b31bc8d213d6 = $this->env->getExtension("native_profiler");
        $__internal_f5f89c09f5de9f222e1ae08ebd34b8c029149ecbec66b6da97d4b31bc8d213d6->enter($__internal_f5f89c09f5de9f222e1ae08ebd34b8c029149ecbec66b6da97d4b31bc8d213d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f5f89c09f5de9f222e1ae08ebd34b8c029149ecbec66b6da97d4b31bc8d213d6->leave($__internal_f5f89c09f5de9f222e1ae08ebd34b8c029149ecbec66b6da97d4b31bc8d213d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9edb7733bc076b298a1928fa28319b643898507991b09ee231e1634d5cdab0ce = $this->env->getExtension("native_profiler");
        $__internal_9edb7733bc076b298a1928fa28319b643898507991b09ee231e1634d5cdab0ce->enter($__internal_9edb7733bc076b298a1928fa28319b643898507991b09ee231e1634d5cdab0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9edb7733bc076b298a1928fa28319b643898507991b09ee231e1634d5cdab0ce->leave($__internal_9edb7733bc076b298a1928fa28319b643898507991b09ee231e1634d5cdab0ce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b663aed1abf8935f2b269dc9e0d8895b54862cc7666792c31fe21ff5c25fc1 = $this->env->getExtension("native_profiler");
        $__internal_35b663aed1abf8935f2b269dc9e0d8895b54862cc7666792c31fe21ff5c25fc1->enter($__internal_35b663aed1abf8935f2b269dc9e0d8895b54862cc7666792c31fe21ff5c25fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_35b663aed1abf8935f2b269dc9e0d8895b54862cc7666792c31fe21ff5c25fc1->leave($__internal_35b663aed1abf8935f2b269dc9e0d8895b54862cc7666792c31fe21ff5c25fc1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9b71a97d9b88779743c226f3dc7e9d3a1fed02fbac7265695bba4087e9e98f8 = $this->env->getExtension("native_profiler");
        $__internal_c9b71a97d9b88779743c226f3dc7e9d3a1fed02fbac7265695bba4087e9e98f8->enter($__internal_c9b71a97d9b88779743c226f3dc7e9d3a1fed02fbac7265695bba4087e9e98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9b71a97d9b88779743c226f3dc7e9d3a1fed02fbac7265695bba4087e9e98f8->leave($__internal_c9b71a97d9b88779743c226f3dc7e9d3a1fed02fbac7265695bba4087e9e98f8_prof);

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
