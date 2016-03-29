<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_dde2c059d256fbc82122c77de5798c4f857bed44d114f655ad54f6a2867ad129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_134dc9b36fb2275e07e41205483042c3a1f60a00987f645f8dcfed2579d0923c = $this->env->getExtension("native_profiler");
        $__internal_134dc9b36fb2275e07e41205483042c3a1f60a00987f645f8dcfed2579d0923c->enter($__internal_134dc9b36fb2275e07e41205483042c3a1f60a00987f645f8dcfed2579d0923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134dc9b36fb2275e07e41205483042c3a1f60a00987f645f8dcfed2579d0923c->leave($__internal_134dc9b36fb2275e07e41205483042c3a1f60a00987f645f8dcfed2579d0923c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4049fcdd365c335331d1f4e79f0527c0cebc73f5595c1fded676db78d1fba683 = $this->env->getExtension("native_profiler");
        $__internal_4049fcdd365c335331d1f4e79f0527c0cebc73f5595c1fded676db78d1fba683->enter($__internal_4049fcdd365c335331d1f4e79f0527c0cebc73f5595c1fded676db78d1fba683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4049fcdd365c335331d1f4e79f0527c0cebc73f5595c1fded676db78d1fba683->leave($__internal_4049fcdd365c335331d1f4e79f0527c0cebc73f5595c1fded676db78d1fba683_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
