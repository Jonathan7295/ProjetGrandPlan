<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5616e10d5097e233934200077fb583d0dbdfe2e7fc7a1019deef0d3ed20fde5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_b2011d6b280aa0c6b6cb46af60e7f796847572d9520faed005088b419c3a1ba5 = $this->env->getExtension("native_profiler");
        $__internal_b2011d6b280aa0c6b6cb46af60e7f796847572d9520faed005088b419c3a1ba5->enter($__internal_b2011d6b280aa0c6b6cb46af60e7f796847572d9520faed005088b419c3a1ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2011d6b280aa0c6b6cb46af60e7f796847572d9520faed005088b419c3a1ba5->leave($__internal_b2011d6b280aa0c6b6cb46af60e7f796847572d9520faed005088b419c3a1ba5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f137f7f53eb297c229e54c1c4640bd5b75f13c527ad628ca4b921f899ac42fc9 = $this->env->getExtension("native_profiler");
        $__internal_f137f7f53eb297c229e54c1c4640bd5b75f13c527ad628ca4b921f899ac42fc9->enter($__internal_f137f7f53eb297c229e54c1c4640bd5b75f13c527ad628ca4b921f899ac42fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f137f7f53eb297c229e54c1c4640bd5b75f13c527ad628ca4b921f899ac42fc9->leave($__internal_f137f7f53eb297c229e54c1c4640bd5b75f13c527ad628ca4b921f899ac42fc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
