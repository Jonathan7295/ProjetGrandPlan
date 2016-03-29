<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_cdacb3a0664a50acfe4e3c54447bad8b049d45a39776487901328ed77fe2bcb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7df395333ed9502ccaa66ec9bc2b2cfb232851eccc8bfc96290de41c07b775b1 = $this->env->getExtension("native_profiler");
        $__internal_7df395333ed9502ccaa66ec9bc2b2cfb232851eccc8bfc96290de41c07b775b1->enter($__internal_7df395333ed9502ccaa66ec9bc2b2cfb232851eccc8bfc96290de41c07b775b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7df395333ed9502ccaa66ec9bc2b2cfb232851eccc8bfc96290de41c07b775b1->leave($__internal_7df395333ed9502ccaa66ec9bc2b2cfb232851eccc8bfc96290de41c07b775b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
