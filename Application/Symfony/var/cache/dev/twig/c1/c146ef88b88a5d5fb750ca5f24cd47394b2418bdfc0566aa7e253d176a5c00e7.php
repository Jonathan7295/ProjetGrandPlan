<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_2b1d8dcfd29abd5b935b1a0d35b1de8fa5c257f070b55d1accec1b65cfaccef6 extends Twig_Template
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
        $__internal_1743ac229fc51f55aafd969047d771d5e3981e6c4dd7c05546d7dc8a43c236d0 = $this->env->getExtension("native_profiler");
        $__internal_1743ac229fc51f55aafd969047d771d5e3981e6c4dd7c05546d7dc8a43c236d0->enter($__internal_1743ac229fc51f55aafd969047d771d5e3981e6c4dd7c05546d7dc8a43c236d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_1743ac229fc51f55aafd969047d771d5e3981e6c4dd7c05546d7dc8a43c236d0->leave($__internal_1743ac229fc51f55aafd969047d771d5e3981e6c4dd7c05546d7dc8a43c236d0_prof);

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
