<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ae5af0a5b631ac2992c711681c9ddbf75ee8117a8ac82ecd8acc3d3d8fb36452 extends Twig_Template
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
        $__internal_9f39da8acb16058c092566e0ac01ae0f8552d999e1562a398df28ea211f5e46f = $this->env->getExtension("native_profiler");
        $__internal_9f39da8acb16058c092566e0ac01ae0f8552d999e1562a398df28ea211f5e46f->enter($__internal_9f39da8acb16058c092566e0ac01ae0f8552d999e1562a398df28ea211f5e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9f39da8acb16058c092566e0ac01ae0f8552d999e1562a398df28ea211f5e46f->leave($__internal_9f39da8acb16058c092566e0ac01ae0f8552d999e1562a398df28ea211f5e46f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
