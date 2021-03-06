<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support;

interface Tree {

    public function countAncestors( $id ): int;
    
    public function getAncestors( $id ): array;
    
    public function countSiblings( $id ): int;
    
    public function getSiblings( $id ): array;
    
    public function countChildren( $id ): int;
    
    public function getChildren( $id ): array;
    
    public function countDescendants( $id ): int;
    
    public function getDescendants( $id, bool $absolute_depth = false ): array;
    
    public function insertNode( $id, $parent_id = 0 ): Tree;
    
    public function removeNode( $id ): Tree;
    
    public function moveNode( $id, $parent_id ): Tree;
    
    public function getTree( $id, int $max_depth = 0, bool $sort = false ): array;
    
    public function rebuild( bool $sort = false ): Tree;

}
