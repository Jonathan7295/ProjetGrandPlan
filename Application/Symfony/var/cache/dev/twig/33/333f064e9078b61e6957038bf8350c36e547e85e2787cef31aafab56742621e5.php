<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0b6ac8234c201b352eca54490845e433d082f3dce35e422b992e75d8be32c3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adf82df7d9187afba4d8be00ff408db6b1620f3f525bc8be036fd7c87ae425b6 = $this->env->getExtension("native_profiler");
        $__internal_adf82df7d9187afba4d8be00ff408db6b1620f3f525bc8be036fd7c87ae425b6->enter($__internal_adf82df7d9187afba4d8be00ff408db6b1620f3f525bc8be036fd7c87ae425b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_adf82df7d9187afba4d8be00ff408db6b1620f3f525bc8be036fd7c87ae425b6->leave($__internal_adf82df7d9187afba4d8be00ff408db6b1620f3f525bc8be036fd7c87ae425b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b2c28a50af48e455b74777647eea1fe69679e2cc86db51b4c4d6ac0043fd4ff = $this->env->getExtension("native_profiler");
        $__internal_3b2c28a50af48e455b74777647eea1fe69679e2cc86db51b4c4d6ac0043fd4ff->enter($__internal_3b2c28a50af48e455b74777647eea1fe69679e2cc86db51b4c4d6ac0043fd4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3b2c28a50af48e455b74777647eea1fe69679e2cc86db51b4c4d6ac0043fd4ff->leave($__internal_3b2c28a50af48e455b74777647eea1fe69679e2cc86db51b4c4d6ac0043fd4ff_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8728e7ed03bf065ef07e1b0d7defa623639bcf8cce04f091de08f65f5f0efb91 = $this->env->getExtension("native_profiler");
        $__internal_8728e7ed03bf065ef07e1b0d7defa623639bcf8cce04f091de08f65f5f0efb91->enter($__internal_8728e7ed03bf065ef07e1b0d7defa623639bcf8cce04f091de08f65f5f0efb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8728e7ed03bf065ef07e1b0d7defa623639bcf8cce04f091de08f65f5f0efb91->leave($__internal_8728e7ed03bf065ef07e1b0d7defa623639bcf8cce04f091de08f65f5f0efb91_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f52401e56ffbaf32b7da1b4196dbd95283fc09f10042956eee30280f77716755 = $this->env->getExtension("native_profiler");
        $__internal_f52401e56ffbaf32b7da1b4196dbd95283fc09f10042956eee30280f77716755->enter($__internal_f52401e56ffbaf32b7da1b4196dbd95283fc09f10042956eee30280f77716755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f52401e56ffbaf32b7da1b4196dbd95283fc09f10042956eee30280f77716755->leave($__internal_f52401e56ffbaf32b7da1b4196dbd95283fc09f10042956eee30280f77716755_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
