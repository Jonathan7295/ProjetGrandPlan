<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_af08893ef623cc74695d07b85b8140f5771d58c28ba92204e6d3ff1a40d1e1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_0fdbd367f128bb310b84e47ae28b120e8595736f3ecc31f2597ad7fe0509099d = $this->env->getExtension("native_profiler");
        $__internal_0fdbd367f128bb310b84e47ae28b120e8595736f3ecc31f2597ad7fe0509099d->enter($__internal_0fdbd367f128bb310b84e47ae28b120e8595736f3ecc31f2597ad7fe0509099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fdbd367f128bb310b84e47ae28b120e8595736f3ecc31f2597ad7fe0509099d->leave($__internal_0fdbd367f128bb310b84e47ae28b120e8595736f3ecc31f2597ad7fe0509099d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fa30cb098176f10ec5eea01a8f2f47f7332330a3f5602f09475d680f2e77229 = $this->env->getExtension("native_profiler");
        $__internal_3fa30cb098176f10ec5eea01a8f2f47f7332330a3f5602f09475d680f2e77229->enter($__internal_3fa30cb098176f10ec5eea01a8f2f47f7332330a3f5602f09475d680f2e77229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3fa30cb098176f10ec5eea01a8f2f47f7332330a3f5602f09475d680f2e77229->leave($__internal_3fa30cb098176f10ec5eea01a8f2f47f7332330a3f5602f09475d680f2e77229_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
