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
        $__internal_15f22e3fbc9e3c827d38c7a0c2b02ad46438e2b0889506d1990300121fe326d1 = $this->env->getExtension("native_profiler");
        $__internal_15f22e3fbc9e3c827d38c7a0c2b02ad46438e2b0889506d1990300121fe326d1->enter($__internal_15f22e3fbc9e3c827d38c7a0c2b02ad46438e2b0889506d1990300121fe326d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_15f22e3fbc9e3c827d38c7a0c2b02ad46438e2b0889506d1990300121fe326d1->leave($__internal_15f22e3fbc9e3c827d38c7a0c2b02ad46438e2b0889506d1990300121fe326d1_prof);

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
