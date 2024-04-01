class Solution(object):
    # nums = [3, 2, 2, 3]
    # val = 3
    def removeElement(self,nums,val):
        self.nums = nums
        self.val = val
        while val in nums:
            nums.remove(val)
        return len(nums)



solution = Solution()
result = solution.removeElement([0,1,2,2,3,0,4,2], 2)
print(result)





