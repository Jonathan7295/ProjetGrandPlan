<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_0058958df2fe2f583db8b8e79a441e3edf60b68b205b2d2826d77a8f1388b2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c2abc57c9a80e511c513d9e67113cb0643449fae6d96d2ddc6f51c70bbfc2443 = $this->env->getExtension("native_profiler");
        $__internal_c2abc57c9a80e511c513d9e67113cb0643449fae6d96d2ddc6f51c70bbfc2443->enter($__internal_c2abc57c9a80e511c513d9e67113cb0643449fae6d96d2ddc6f51c70bbfc2443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2abc57c9a80e511c513d9e67113cb0643449fae6d96d2ddc6f51c70bbfc2443->leave($__internal_c2abc57c9a80e511c513d9e67113cb0643449fae6d96d2ddc6f51c70bbfc2443_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3aa130228f4645c4c15f321697e29a710180c56d10cbfefae54d01d27d678ade = $this->env->getExtension("native_profiler");
        $__internal_3aa130228f4645c4c15f321697e29a710180c56d10cbfefae54d01d27d678ade->enter($__internal_3aa130228f4645c4c15f321697e29a710180c56d10cbfefae54d01d27d678ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_3aa130228f4645c4c15f321697e29a710180c56d10cbfefae54d01d27d678ade->leave($__internal_3aa130228f4645c4c15f321697e29a710180c56d10cbfefae54d01d27d678ade_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
