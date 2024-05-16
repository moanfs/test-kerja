<?php
class TreeNode
{
    public $value;
    public $left;
    public $right;

    function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

function getnodevalue($T)
{
    return $T->value;
}

function getleft($T)
{
    return $T->left;
}

function getright($T)
{
    return $T->right;
}

function max2($a, $b)
{
    return ($a > $b) ? $a : $b;
}

function max3($a, $b, $c)
{
    return max2($a, max2($b, $c));
}

function maxtree($T)
{
    if ($T === null) {
        return 0;
    }

    $node_value = getnodevalue($T);
    $left_subtree = getleft($T);
    $right_subtree = getright($T);

    $max_left = maxtree($left_subtree);
    $max_right = maxtree($right_subtree);

    return max3($node_value, $max_left, $max_right);
}

$root = new TreeNode(5);
$root->left = new TreeNode(3);
$root->right = new TreeNode(8);
$root->left->left = new TreeNode(2);
$root->left->right = new TreeNode(4);
$root->right->left = new TreeNode(7);
$root->right->right = new TreeNode(10);

$max_value = maxtree($root);
echo "Nilai terbesar dari tree T adalah: $max_value";
