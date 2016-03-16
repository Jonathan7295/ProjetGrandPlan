<?php

/* ::base.html.twig */
class __TwigTemplate_7ae02706e6817483498a98aebca50751293e98c85701dfa20b4eb4c5947fa6a4 extends Twig_Template
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
        $__internal_c6517d49b1213cc525d8ac4c950ef0e23cf879e9bfefb814d06a2617446b2d6b = $this->env->getExtension("native_profiler");
        $__internal_c6517d49b1213cc525d8ac4c950ef0e23cf879e9bfefb814d06a2617446b2d6b->enter($__internal_c6517d49b1213cc525d8ac4c950ef0e23cf879e9bfefb814d06a2617446b2d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c6517d49b1213cc525d8ac4c950ef0e23cf879e9bfefb814d06a2617446b2d6b->leave($__internal_c6517d49b1213cc525d8ac4c950ef0e23cf879e9bfefb814d06a2617446b2d6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2eae25ce4f541b2d6bc254c2268db3d9c989507811f50faa0c21c218719a15b7 = $this->env->getExtension("native_profiler");
        $__internal_2eae25ce4f541b2d6bc254c2268db3d9c989507811f50faa0c21c218719a15b7->enter($__internal_2eae25ce4f541b2d6bc254c2268db3d9c989507811f50faa0c21c218719a15b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2eae25ce4f541b2d6bc254c2268db3d9c989507811f50faa0c21c218719a15b7->leave($__internal_2eae25ce4f541b2d6bc254c2268db3d9c989507811f50faa0c21c218719a15b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f73fd74426d1c49b07add038926fc9bf85fdfc829691dd20ebb5af7ac3344eaa = $this->env->getExtension("native_profiler");
        $__internal_f73fd74426d1c49b07add038926fc9bf85fdfc829691dd20ebb5af7ac3344eaa->enter($__internal_f73fd74426d1c49b07add038926fc9bf85fdfc829691dd20ebb5af7ac3344eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f73fd74426d1c49b07add038926fc9bf85fdfc829691dd20ebb5af7ac3344eaa->leave($__internal_f73fd74426d1c49b07add038926fc9bf85fdfc829691dd20ebb5af7ac3344eaa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3da87ea22d54397a1e8b8d2e645303d93700b0ab8300673dcf8f2058d67e2e2 = $this->env->getExtension("native_profiler");
        $__internal_a3da87ea22d54397a1e8b8d2e645303d93700b0ab8300673dcf8f2058d67e2e2->enter($__internal_a3da87ea22d54397a1e8b8d2e645303d93700b0ab8300673dcf8f2058d67e2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3da87ea22d54397a1e8b8d2e645303d93700b0ab8300673dcf8f2058d67e2e2->leave($__internal_a3da87ea22d54397a1e8b8d2e645303d93700b0ab8300673dcf8f2058d67e2e2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cedfc436b4be9d53a9377e3c315cf330682ee93d1e532eda4c8cdd66c65c6c3 = $this->env->getExtension("native_profiler");
        $__internal_8cedfc436b4be9d53a9377e3c315cf330682ee93d1e532eda4c8cdd66c65c6c3->enter($__internal_8cedfc436b4be9d53a9377e3c315cf330682ee93d1e532eda4c8cdd66c65c6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8cedfc436b4be9d53a9377e3c315cf330682ee93d1e532eda4c8cdd66c65c6c3->leave($__internal_8cedfc436b4be9d53a9377e3c315cf330682ee93d1e532eda4c8cdd66c65c6c3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
