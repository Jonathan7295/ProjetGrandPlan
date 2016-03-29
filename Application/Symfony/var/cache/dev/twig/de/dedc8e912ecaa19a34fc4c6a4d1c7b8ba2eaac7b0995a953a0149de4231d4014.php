<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b84c5d0e10d7dbdc71c4b72815f1ca7b82de517ed06e9bd45c4022183e90e706 extends Twig_Template
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
        $__internal_6193975f4f97bc33576a05d468b75978d4a3e68dc8ba4828e574e41739d4da10 = $this->env->getExtension("native_profiler");
        $__internal_6193975f4f97bc33576a05d468b75978d4a3e68dc8ba4828e574e41739d4da10->enter($__internal_6193975f4f97bc33576a05d468b75978d4a3e68dc8ba4828e574e41739d4da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6193975f4f97bc33576a05d468b75978d4a3e68dc8ba4828e574e41739d4da10->leave($__internal_6193975f4f97bc33576a05d468b75978d4a3e68dc8ba4828e574e41739d4da10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
