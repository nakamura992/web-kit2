"use client";

import { Box, Typography } from "@mui/material";

import BgForm from "@/components/common/BgForm";

export default function NotFound() {
    return (
        <BgForm>
            <Box
                sx={{
                    padding: 4,
                    backgroundColor: "#fff"
                }}
            >
                <Typography
                    variant="h5"
                    sx={{
                        textAlign: "center",
                        mb: 2,
                        fontWeight: "bold"
                    }}
                >
                    404 - ページが見つかりません
                </Typography>
                <Typography
                    sx={{
                        textAlign: "center",
                        color: "text.secondary"
                    }}
                >
                    お探しのページは存在しないか、移動した可能性があります。
                </Typography>
            </Box>
        </BgForm>
    );
}
